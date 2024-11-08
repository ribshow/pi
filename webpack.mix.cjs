// webpack.mix.js
const mix = require("laravel-mix");

mix.webpackConfig({
    stats: {
        children: true,
    },
});

mix.js("resources/js/app.js", "public/js")
    .postCss("resources/css/app.css", "public/css", [
        //
    ])
    .sourceMaps();

mix.js("resources/js/chat.js", "public/js").setPublicPath("public");

mix.js("resources/js/chattech.js", "public/js").setPublicPath("public");

mix.js("resources/js/chatgeek.js", "public/js").setPublicPath("public");

mix.js("resources/js/chatsci.js", "public/js").setPublicPath("public");
