<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>icon</title>
  <link rel="stylesheet" href="/assets/css/app.css" media="all">
  <!-- <link rel="stylesheet" href="icon.css"> -->
  <style>
    html, body {
      color: #2c3e50;
    }

    h1 {
      font-weight: normal;
      font-size: 3em;
      text-align: center;
    }

    .l-glyph > li {
      display: inline-block;
      background-color: #ecf0f1;
      border-radius: .2em;
      margin: .5em;
      padding: .5em;
      width: 8em;
      height: 8em;
      text-align: center;
    }

    .l-glyph .icon {
      font-size: 3.8em;
    }

    .l-glyph .name {
      margin-top: 1em;
      overflow: hidden;
      white-space: nowrap;
      text-overflow: ellipsis;
    }

    .l-glyph .codepoint {
      margin-top: 1em;
      font-family: monospace;
      color: #7f8c8d;
    }
  </style>
</head>
<body>
  <h1>icon</h1>
  <ul class="l-glyph">
    <li>
      <div class="icon icon-check"></div>
      <div class="name">check</div>
      <div class="codepoint">F001</div>
    </li>
  </ul>
</body>
</html>