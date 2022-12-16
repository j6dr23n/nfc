$(function () {
  "use strict";
  var i = Quill.import("ui/icons");
  (i.bold = '<i class="la la-bold" aria-hidden="true"></i>'),
    (i.italic = '<i class="la la-italic" aria-hidden="true"></i>'),
    (i.underline = '<i class="la la-underline" aria-hidden="true"></i>'),
    (i.strike = '<i class="la la-strikethrough" aria-hidden="true"></i>'),
    (i.list.ordered = '<i class="la la-list-ol" aria-hidden="true"></i>'),
    (i.list.bullet = '<i class="la la-list-ul" aria-hidden="true"></i>'),
    (i.link = '<i class="la la-link" aria-hidden="true"></i>'),
    (i.image = '<i class="la la-image" aria-hidden="true"></i>'),
    (i.video = '<i class="la la-film" aria-hidden="true"></i>'),
    (i["code-block"] = '<i class="la la-code" aria-hidden="true"></i>'),
    new Quill("#quillEditor", {
      modules: {
        toolbar: [
          [{ header: [1, 2, 3, 4, 5, 6, !1] }],
          ["bold", "italic", "underline", "strike"],
          [{ list: "ordered" }, { list: "bullet" }],
          ["link", "image", "video"],
        ],
      },
      theme: "snow",
    });
});
