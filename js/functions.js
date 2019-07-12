$.fn.typer = function(text, options) {
  options = $.extend(
    {},
    {
      char: " ",
      delay: 1000,
      duration: 600,
      endless: true
    },
    options || text
  );

  text = $.isPlainObject(text) ? options.text : text;

  var elem = $(this),
    isTag = false,
    c = 0;

  (function typetext(i) {
    var e =
        ({
          string: 1,
          number: 1
        }[typeof text]
          ? text
          : text[i]) + options.char,
      char = e.substr(c++, 1);

    if (char === "<") {
      isTag = true;
    }
    if (char === ">") {
      isTag = false;
    }
    elem.html(e.substr(0, c));
    if (c <= e.length) {
      if (isTag) {
        typetext(i);
      } else {
        setTimeout(typetext, options.duration / 5, i);
      }
    } else {
      c = 0;
      i++;

      if (i === text.length && !options.endless) {
        return;
      } else if (i === text.length) {
        i = 0;
      }
      setTimeout(typetext, options.delay, i);
    }
  })(0);
};

$("#type").typer(["E-Governance at your finger tip", "It doesn't get better"]);

// Sticky navbar
// =========================
$(document).ready(function() {
  // Custom function which toggles between sticky class (is-sticky)
  var stickyToggle = function(sticky, stickyWrapper, scrollElement) {
    var stickyHeight = sticky.outerHeight();
    var stickyTop = stickyWrapper.offset().top;
    if (scrollElement.scrollTop() >= stickyTop) {
      stickyWrapper.height(stickyHeight);
      sticky.addClass("is-sticky");
    } else {
      sticky.removeClass("is-sticky");
      stickyWrapper.height("auto");
    }
  };

  // Find all data-toggle="sticky-onscroll" elements
  $('[data-toggle="sticky-onscroll"]').each(function() {
    var sticky = $(this);
    var stickyWrapper = $("<div>").addClass("sticky-wrapper"); // insert hidden element to maintain actual top offset on page
    sticky.before(stickyWrapper);
    sticky.addClass("sticky");

    // Scroll & resize events
    $(window).on("scroll.sticky-onscroll resize.sticky-onscroll", function() {
      stickyToggle(sticky, stickyWrapper, $(this));
    });

    // On page load
    stickyToggle(sticky, stickyWrapper, $(window));
  });
});
