<?php

namespace Sioen;

/**
 * Get a translated list of countries
 * Uses this vendor: https://github.com/umpirsky/country-list/
 *
 * @author Wouter Sioen <wouter.sioen@wijs.be>
 */
class Countries
{
    /**
     * @var array
     */
    protected $countries = array();

    /**
     * @param string $language
     * @return array
     */
    protected function getCountries($language)
    {
        if(!isset($this->countries[$language]))
        {
            $this->countries[$language] = include($this->getFilePath($language));
        }

        return $this->countries[$language];
    }

    /**
     * @param string $language
     * @return string
     */
    protected function getFilePath($language)
    {
        // our files with countries are placed in the country-list vendor
        return dirname(__FILE__) . '/../../vendor/umpirsky/country-list/country/icu/' .
            $language . '/country.php'
        ;
    }

    /**
     * @param string $language
     * @return array
     */
    public function getForLanguage($language)
    {
        return $this->getCountries($language);
    }
}