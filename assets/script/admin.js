(function ($) {
  const layouts = acfLayoutPreviews.layouts;

const enhancePopup = ($popup) => {
  const $ul = $popup.find('ul');

  if ($ul.hasClass('custom-layout-grid')) return;

  const tryEnhance = () => {
    const $lis = $ul.find('li');
    if ($lis.length === 0) {
      // Retry until <li>s are populated
      setTimeout(tryEnhance, 30);
      return;
    }

    $ul.addClass('custom-layout-grid');

    $lis.each(function () {
      const $li = $(this);
      const $a = $li.find('a');
      const layoutName = $a.data('layout');

      if (layouts[layoutName]) {
        const layoutLabel = layoutName.replace(/_/g, ' ').replace(/\b\w/g, c => c.toUpperCase());
        const imgUrl = layouts[layoutName];

        $a.empty().append(`
          <img src="${imgUrl}" alt="${layoutLabel}" style="max-width:100%; display:block; margin: 0 auto 8px;" />
          <span style="text-align:center; display:block;">${layoutLabel}</span>
        `);
      }
    });
  };

  tryEnhance(); // Initial attempt
};


  const observer = new MutationObserver((mutationsList) => {
    mutationsList.forEach((mutation) => {
      mutation.addedNodes.forEach((node) => {
        if (node.nodeType === 1 && node.classList.contains('acf-fc-popup')) {
          const $popup = $(node);
          setTimeout(() => enhancePopup($popup), 50); // Delay to ensure default DOM is rendered
        }
      });
    });
  });

  observer.observe(document.body, {
    childList: true,
    subtree: true
  });
})(jQuery);
