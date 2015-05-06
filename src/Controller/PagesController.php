<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link      http://cakephp.org CakePHP(tm) Project
 * @since     0.2.9
 * @license   http://www.opensource.org/licenses/mit-license.php MIT License
 */
namespace App\Controller;

use Cake\Core\Configure;
use Cake\Network\Exception\NotFoundException;
use Cake\View\Exception\MissingTemplateException;

/**
 * Static content controller
 *
 * This controller will render views from Template/Pages/
 *
 * @link http://book.cakephp.org/3.0/en/controllers/pages-controller.html
 */
class PagesController extends AppController
{

    public function display()
    {
        $path = func_get_args();

        $count = count($path);
        if (!$count) {
            return $this->redirect('/');
        }
        $page = $subpage = null;

        if (!empty($path[0])) {
            $page = $path[0];
        }
        if (!empty($path[1])) {
            $subpage = $path[1];
        }
        $this->set(compact('page', 'subpage'));

        try {
            $this->render(implode('/', $path));
        } catch (MissingTemplateException $e) {
            if (Configure::read('debug')) {
                throw $e;
            }
            throw new NotFoundException();
        }
    }

    public function demo()
    {

    }

    public function calendar()
    {

    }

    public function month() {

    }

    public function events() {
        $this->autoRender = null; // We don't render a view in this example

        echo '[
  {
    "title": "All Day Event",
    "start": "2015-05-01"
  },
  {
    "title": "Long Event",
    "start": "2015-05-07",
    "end": "2015-05-10"
  },
  {
    "id": "999",
    "title": "Repeating Event",
    "start": "2015-05-09T16:00:00-05:00"
  },
  {
    "id": "999",
    "title": "Repeating Event",
    "start": "2015-05-16T16:00:00-05:00"
  },
  {
    "title": "Conference",
    "start": "2015-05-11",
    "end": "2015-05-13"
  },
  {
    "title": "Meeting",
    "start": "2015-05-12T10:30:00-05:00",
    "end": "2015-05-12T12:30:00-05:00"
  },
  {
    "title": "Lunch",
    "start": "2015-05-12T12:00:00-05:00"
  },
  {
    "title": "Meeting",
    "start": "2015-05-12T14:30:00-05:00"
  },
  {
    "title": "Happy Hour",
    "start": "2015-05-12T17:30:00-05:00"
  },
  {
    "title": "Dinner",
    "start": "2015-05-12T20:00:00"
  },
  {
    "title": "Birthday Party",
    "start": "2015-05-13T07:00:00-05:00"
  },
  {
    "title": "Click for Google",
    "url": "http://google.com/",
    "start": "2015-05-28"
  }
]
';
die;
    }
}
