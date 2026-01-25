<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Открыть Telegram</title>
  <style>
    :root {
      color-scheme: light;
    }
    body {
      margin: 0;
      font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Arial, sans-serif;
      background: #f6f7fb;
      color: #1d1d1f;
    }
    .wrap {
      min-height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
      padding: 24px;
    }
    .card {
      width: 100%;
      max-width: 420px;
      background: #ffffff;
      border-radius: 16px;
      padding: 28px;
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
      text-align: center;
    }
    h1 {
      margin: 0 0 12px;
      font-size: 22px;
    }
    p {
      margin: 0 0 20px;
      line-height: 1.5;
      color: #4b5563;
    }
    .loader {
      width: 48px;
      height: 48px;
      border-radius: 50%;
      border: 4px solid #e5e7eb;
      border-top-color: #2a7df8;
      margin: 20px auto 0;
      animation: spin 0.9s linear infinite;
    }
    @keyframes spin {
      from {
        transform: rotate(0deg);
      }
      to {
        transform: rotate(360deg);
      }
    }
    .buttons {
      display: grid;
      gap: 12px;
    }
    .button {
      display: inline-block;
      padding: 12px 18px;
      border-radius: 12px;
      text-decoration: none;
      font-weight: 600;
      text-align: center;
      background: #2a7df8;
      color: #ffffff;
    }
    .button.secondary {
      background: #e5e7eb;
      color: #111827;
    }
  </style>
</head>
<body>
  <div class="wrap">
    <div class="card">
      <div id="loader">
        <h1>Открываем Telegram…</h1>
        <p>Если Telegram не открылся автоматически, нажмите кнопку ниже.</p>
        <div class="loader" aria-hidden="true"></div>
      </div>
      <div id="fallback" hidden>
        <h1>Открыть Telegram</h1>
        <p>Если не открылось автоматически — нажмите кнопку.</p>
        <div class="buttons">
          <a class="button" id="tgLinkButton" href="tg://resolve?domain=Clario_69_bot">Открыть Telegram</a>
          <a class="button secondary" id="tgWebLinkButton" href="https://t.me/Clario_69_bot" target="_blank" rel="noopener noreferrer">Открыть в браузере</a>
        </div>
      </div>
    </div>
  </div>
  <script id="binom-pixel-src" type="text/plain">
    var BPixelJS;!function(){"use strict";var n={d:function(e,o){for(var t in o)n.o(o,t)&&!n.o(e,t)&&Object.defineProperty(e,t,{enumerable:!0,get:o[t]})},o:function(n,e){return Object.prototype.hasOwnProperty.call(n,e)}},e={};function o(n){!window.isPixelLoaded&&window.isPixelLoading?(window.pixelLoadedHandlers||(window.pixelLoadedHandlers=[]),window.pixelLoadedHandlers.push(n)):n()}function t(n){var e,o;return null!==(e=null===(o=window.BPIXEL_JS_CONFIG)||void 0===o?void 0:o[n])&&void 0!==e?e:void 0}function i(){var n;return(n=console).error.apply(n,arguments)}function r(n){return r="function"==typeof Symbol&&"symbol"==typeof Symbol.iterator?function(n){return typeof n}:function(n){return n&&"function"==typeof Symbol&&n.constructor===Symbol&&n!==Symbol.prototype?"symbol":typeof n},r(n)}function a(){var n,e,o,t;return null!==(n=null!==(e=function(){if("object"!==r(window.tokens)||!window.tokens)return null;var n=window.tokens.bcid;return"string"!=typeof n?null:n}())&&void 0!==e?e:null!==(o=null==(t=document.cookie.match(new RegExp("(^|[ ;])".concat("bcid","=(.+?)(;|$)"))))?void 0:t[2])&&void 0!==o?o:null)&&void 0!==n?n:function(){var n,e,o=null!==(n=null==(e=window.location.search.match(new RegExp("(^|[&?])".concat("bcid","=(.*?)(&|$)"))))?void 0:e[2])&&void 0!==n?n:null;return"string"!=typeof o?null:o}()}function l(n,e){return"".concat(n).concat(e)}function d(n){var e=n.base,o=n.params,t=e||"?";return Object.entries(o).forEach((function(n){var e=n[0],o=n[1];"?"!==t[t.length-1]&&(t+="&"),t+="".concat(e,"=").concat(o)})),t}function u(n){var e=new Image;e.src=n,e.referrerPolicy="no-referrer-when-downgrade"}n.d(e,{default:function(){return c}});var c={config:function(n){!function(n){window.BPIXEL_JS_CONFIG=Object.assign({},window.BPIXEL_JS_CONFIG,n)}(n)},run:function(){var n,e,o,r=arguments.length>0&&void 0!==arguments[0]?arguments[0]:{};window.isPixelLoading=!0;var u,c,s,f=null!==(n=r.url)&&void 0!==n?n:t("url"),v=null!==(e=r.campaignKey)&&void 0!==e?e:t("campaignKey"),p=null!==(o=r.tokens)&&void 0!==o?o:{};void 0!==f?void 0!==v?(u=l(f,d({base:window.location.search,params:Object.assign({},p,{key:v,lp_type:"pixel"})})),c=function(){var n,e;window.isPixelLoading=!1,window.isPixelLoaded=!0,null===(n=window.pixelLoadedHandlers)||void 0===n||n.forEach((function(n){n()})),(e=a())?[{elements:document.querySelectorAll("a"),getHref:function(n){return n.getAttribute("href")},setHref:function(n,e){n.setAttribute("href",e)}},{elements:document.querySelectorAll("[data-href]"),getHref:function(n){return n.dataset.href||null},setHref:function(n,e){n.dataset.href=e}}].forEach((function(n){var o=n.elements,t=n.setHref,i=n.getHref;o.forEach((function(n){var o,r=i(n);r&&(/[?&]event[_\d]+=/.test(o=r)||/[?&]cnv_id=OPTIONAL(&|$)/.test(o)||/[?&]lp=(1|data_upd)(&|$)/.test(o))&&t(n,"".concat(r,"&bcid=").concat(e))}))})):i("Can't find click id")},(s=document.createElement("script")).src=u,s.async=!1,c&&(s.onload=c),document.head.appendChild(s)):i('"campaignKey" param must be passed'):i('"url" param must be passed')},update:function(){var n,e,r,c=arguments.length>0&&void 0!==arguments[0]?arguments[0]:{},s=null!==(n=c.url)&&void 0!==n?n:t("url"),f=null!==(e=c.updateKey)&&void 0!==e?e:t("updateKey"),v=null!==(r=c.tokens)&&void 0!==r?r:{};o((function(){if(void 0!==s)if(void 0!==f){var n=a();n?u(l(s,d({base:"?",params:Object.assign({},v,{upd_clickid:n,upd_key:f})}))):i("Can't find click id")}else i('"updateKey" param must be passed');else i('"url" param must be passed')}))},conversion:function(){var n,e,r=arguments.length>0&&void 0!==arguments[0]?arguments[0]:{},c=null!==(n=r.url)&&void 0!==n?n:t("url"),s=null!==(e=r.tokens)&&void 0!==e?e:{};o((function(){if(void 0!==c){var n=a();n||function(){var n;(n=console).warn.apply(n,arguments)}("Can't find click id"),u(l(c,d({base:"?",params:Object.assign({},s,{cnv_id:null!=n?n:"conversion_pixel"})})))}else i('"url" param must be passed')}))},onPixelLoaded:o,useTokens:function(n){o((function(){!function(n){"loading"!==document.readyState?n():document.addEventListener("DOMContentLoaded",n)}((function(){var e;n(null!==(e=window.tokens)&&void 0!==e?e:{})}))}))}};BPixelJS=e.default}();
  </script>
  <script id="binom-pixel-init" type="text/plain">
    BPixelJS.config({
      url: 'https://mobi-slon.com/index.php',
      campaignKey: 'f20604473b94446b8b5c33146525c99f',
    });
    BPixelJS.run();
  </script>
  <script>
    const loader = document.getElementById("loader");
    const fallback = document.getElementById("fallback");
    const tgLinkButton = document.getElementById("tgLinkButton");
    const tgWebLinkButton = document.getElementById("tgWebLinkButton");
    const pixelSource = document.getElementById("binom-pixel-src");
    const pixelInit = document.getElementById("binom-pixel-init");

    const DEEP_LINK_BASE = "tg://resolve?domain=Clario_69_bot";
    const WEB_LINK_BASE = "https://t.me/Clario_69_bot";
    const AUTO_REDIRECT_TIMEOUT = 1500;

    const params = new URLSearchParams(window.location.search);
    const storedClickId = sessionStorage.getItem("clickid");
    if (!params.get("clickid") && storedClickId) {
      params.set("clickid", storedClickId);
    }
    const clickId = params.get("clickid") || "";
    const startPayload = clickId ? encodeURIComponent(clickId) : "";
    const tgLink = startPayload ? `${DEEP_LINK_BASE}&start=${startPayload}` : DEEP_LINK_BASE;
    const tgWebLink = startPayload ? `${WEB_LINK_BASE}?start=${startPayload}` : WEB_LINK_BASE;

    if (tgLinkButton) {
      tgLinkButton.href = tgLink;
    }
    if (tgWebLinkButton) {
      tgWebLinkButton.href = tgWebLink;
    }

    const loadBinomPixel = () => {
      if (!pixelSource || !pixelInit) {
        return;
      }
      [pixelSource, pixelInit].forEach((node) => {
        const script = document.createElement("script");
        script.textContent = node.textContent || "";
        document.head.appendChild(script);
      });
    };

    let redirectHandled = false;
    const showFallback = () => {
      if (redirectHandled) {
        return;
      }
      redirectHandled = true;
      loader.hidden = true;
      fallback.hidden = false;
      loadBinomPixel();
    };

    document.addEventListener("visibilitychange", () => {
      if (document.hidden) {
        redirectHandled = true;
      }
    });

    setTimeout(() => {
      if (!redirectHandled && !document.hidden) {
        showFallback();
      }
    }, AUTO_REDIRECT_TIMEOUT);

    window.location.href = tgLink;
  </script>
</body>
</html>
