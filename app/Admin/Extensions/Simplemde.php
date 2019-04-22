<?php
/**
 * Created by PhpStorm.
 * User: samxiao
 * Date: 2019/4/17
 * Time: 下午5:51
 */

namespace App\Admin\Extensions;

use Encore\Admin\Form\Field;

class Simplemde extends Field
{
    protected $view = 'admin::form.editor';

    protected static $css = [
        'css/simplemde.min.css',
    ];

    protected static $js = [
        'js/simplemde.min.js',
    ];

    public function render()
    {
        $this->script = <<<EOT

 var simplemde = new SimpleMDE({
               autofocus: true,
                autosave: {
                    enabled: true,
                    delay: 5000,
                    unique_id: "editor01",
                },
                spellChecker: false,
            });

EOT;
        return parent::render();

    }
}
