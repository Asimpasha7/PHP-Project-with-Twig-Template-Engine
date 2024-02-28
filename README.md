# PHP Project with Twig Template Engine

This repository contains a PHP project that utilizes the Twig template engine for rendering dynamic content. The project includes widgets that fetch data from JSON files and display it in an HTML template.

## Project Structure

The project structure is organized as follows:

/admin-db
  /fonts
  /jsons
  /template_files
  /css
  /css(1)
  template.html
  /vendor
  /twig
  /twig
  /src
  /Loader
  FilesystemLoader.php
  index.php
  composer.json

  ## Getting Started

Follow the steps below to set up and run the project.

### Prerequisites

- PHP installed on your machine.
- Composer installed to manage project dependencies.

### Installation

1. Clone the repository:

   ```bash
   git clone <https://github.com/Asimpasha7/PHP-Project-with-Twig-Template-Engine.git>

2. Change into the project directory:

   cd project-directory


Usage

1. Update composer.json:
Make sure the "require" section includes the necessary packages:

json
Copy code
"require": {
    "twig/twig": "^3.0"
}

2. Initialize Twig in index.php:
  require_once __DIR__ . '/vendor/autoload.php';

  $loader = new \Twig\Loader\FilesystemLoader(__DIR__ . '');
  $twig = new \Twig\Environment($loader);

3.Load JSON data and render the template:

  $widgetData1 = json_decode(file_get_contents(__DIR__ . '/jsons/summary.json'), true);

    echo $twig->render('template.php', [
        'widgetData1' => $widgetData1,
        // Add other widget data as needed
    ]);

4. Run the server php -S localhost:8000
5. php -S localhost:8000/index.php


     
