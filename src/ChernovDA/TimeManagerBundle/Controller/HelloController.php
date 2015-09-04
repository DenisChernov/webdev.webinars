<?php
/**
 * Created by PhpStorm.
 * User: denisch
 * Date: 20.08.2015
 * Time: 13:56
 */

namespace ChernovDA\TimeManagerBundle\Controller;

use Symfony\Component\HttpFoundation\Response;

class HelloController
{
    public function indexAction($name = testing) {
        return new Response(
                            '<html>
                                <body>
                                    Hello'. $name. '!
                                </body>
                            </html>');
    }

}