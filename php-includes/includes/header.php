<!DOCTYPE html>
<html lang=en-ca>
<head>
  <meta charset=utf-8>
  <title>Uniforms—not every colour survives</title>
  <meta name="handheldfriendly" content="true">
  <meta name="mobileoptimized" content="240">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <link href="css/general.css" rel="stylesheet">
  <link href="http://fonts.googleapis.com/css?family=Coda" rel="stylesheet">
</head>
<body>

  <header class="banner clearfix">
    <h1 class="logo"><a href="index.php" class="logo-link">Uniforms</a></h1>
    <nav class="nav-wrapper">
      <ul class="nav nav-primary">
        <li><a href="captain.php" class="nav-link nav-primary-link captain <?php if ($headerClass == 'captain') echo 'nav-selected'; ?>">Captain</a></li>
        <li><a href="command.php" class="nav-link nav-primary-link command <?php if ($headerClass == 'command') echo 'nav-selected'; ?>">Command</a></li>
        <li><a href="sciences.php" class="nav-link nav-primary-link sciences">Sciences</a></li>
        <li><a href="operations.php" class="nav-link nav-primary-link operations">Operations</a></li>
      </ul>
    </nav>
    <p class="alpha page-head <?php echo $headerClass; ?>"><?php echo $header; ?></p>
  </header>
