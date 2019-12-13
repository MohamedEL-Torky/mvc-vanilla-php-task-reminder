<?php

namespace App\Controllers;

class PagesController
{
    public function home()
    {

        view("index", null);

    }

    public function about()
    {
        view("about", null);
    }

    public function aboutCulture()
    {
        view("about-culture", null);
    }

    public function contact()
    {
        view("contact", null);
    }
}