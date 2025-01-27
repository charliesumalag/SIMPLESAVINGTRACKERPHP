<?php


/**
 * Get the base path
 *
 * @param string $path
 * @return string
 */
function basePath($path)
{
    return __DIR__ . '/' . $path;
}


/**
 * Load the view
 *
 * @param string $name
 * @return void
 */
function loadView($name)
{
    $viewPath = basePath("app/views/{$name}.view.php");

    if (file_exists($viewPath)) {
        require $viewPath;
    } else {
        echo "View {$name} not found.";
    }
}



/**
 * Load the partial
 *
 * @param string $name
 * @return void
 */
function loadPartial($name)
{
    $partialPath = basePath("App/views/partials/{$name}.php");

    if (file_exists($partialPath)) {
        require $partialPath;
    } else {
        echo "Partial {$name} not found.";
    }
}


/**
 * Inpect value
 *
 * @param mixed $value
 * @return void
 */
function inspect($value)
{
    echo '<pre>';
    var_dump($value);
    echo '</pre>';
}


/**
 * Inpect value and die
 *
 * @param mixed $value
 * @return void
 */
function inspectAndDie($value)
{
    echo '<pre>';
    die(var_dump($value));
    echo '</pre>';
}

/**
 * Sanitize a data
 *
 * @param string $dirty
 * @return string
 */
function sanitize($dirty)
{
    return filter_var(trim($dirty), FILTER_SANITIZE_FULL_SPECIAL_CHARS);
}

/**
 * Redirect url
 *
 * @param string $url
 * @return  void
 */
function redirect($url)
{
    header("Location: {$url}");
    exit;
}
