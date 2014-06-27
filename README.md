# Country list

A wrapper around <https://github.com/umpirsky/country-list> to easily fetch a list of countries in a certain language or get a specific country by country code and language.

# Installing

composer.json

    {
        "require": {
            "woutersioen/country-list": "dev-master"
        }
    }

index file for your project

    // update this to the path to the "vendor/" directory, relative to this file
    require_once '../vendor/autoload.php';

# Usage

With dependency injection container:

    // fetch an array of countries in a language
    $this->getContainer('countries')->getForLanguage('en');

    // fetch one country in a language
    $this->getContainer('countries')->getSpecificForLanguage('be', 'en');
    // returns 'Belgium'

PHP 5.4 +

    use Sioen\ContryList;

    // fetch an array of countries in a language
    $languages = (new CountryList)->getForLanguage('en');

    // fetch one country in a language
    $languages = (new CountryList)->getSpecificForLanguage('be', 'en');
    // returns 'Belgium'

PHP 5.3

    use Sioen\ContryList;

    $countryList = new CountryList();

    // fetch an array of countries in a language
    $languages = $countryList->getForLanguage('en');

    // fetch one country in a language
    $languages = $countryList->getSpecificForLanguage('be', 'en');
    // returns 'Belgium'
