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
    .debug {
      margin-top: 16px;
      padding: 12px;
      background: #f3f4f6;
      border-radius: 12px;
      text-align: left;
      font-size: 13px;
      word-break: break-all;
      white-space: pre-wrap;
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
        <pre class="debug" id="debugLink"></pre>
      </div>
    </div>
  </div>
  <script>
    const loader = document.getElementById("loader");
    const fallback = document.getElementById("fallback");
    const debugLink = document.getElementById("debugLink");
    const tgLinkButton = document.getElementById("tgLinkButton");
    const tgWebLinkButton = document.getElementById("tgWebLinkButton");

    const DEEP_LINK_BASE = "tg://resolve?domain=Clario_69_bot";
    const WEB_LINK_BASE = "https://t.me/Clario_69_bot";

    const params = new URLSearchParams(window.location.search);
    const storedClickId = sessionStorage.getItem("clickid");
    if (!params.get("clickid") && storedClickId) {
      params.set("clickid", storedClickId);
    }
    const payload = params.toString();
    const payloadEncoded = encodeURIComponent(payload);
    const tgLink = payload ? `${DEEP_LINK_BASE}&start=${payloadEncoded}` : DEEP_LINK_BASE;
    const tgWebLink = payload ? `${WEB_LINK_BASE}?start=${payloadEncoded}` : WEB_LINK_BASE;

    loader.hidden = true;
    fallback.hidden = false;
    if (tgLinkButton) {
      tgLinkButton.href = tgLink;
    }
    if (tgWebLinkButton) {
      tgWebLinkButton.href = tgWebLink;
    }
    if (debugLink) {
      debugLink.textContent = tgLink;
    }

    console.log("[go] params:", params.toString());
    console.log("[go] tgLink:", tgLink);
    alert(tgLink);
  </script>
</body>
</html>
