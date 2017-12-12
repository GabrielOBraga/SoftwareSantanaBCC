<?php
/**
 * Created by PhpStorm.
 * User: igort
 * Date: 12/12/2017
 * Time: 10:16
 */

class createForms
{
    public $html;

    public function __construct(string $url)
    {
        $this->html =
            "<body>
                <div style=\" margin: 5% 12.5%; position: relative; top:0 \"><br>
                <form action=".$url." method=\"POST\" id=\"basicBootstrapForm\" class=\"form-horizontal\">
                <fieldset>";
    }

    public function input(string $tipo, $label, string $nomeCampo)
    {
        $this->html = $this->html.
            "<div class=\"form-group\">
                <label class=\"col-xs-3 control-label\">".$label."</label>
                <div class=\"col-xs-3\">
                    <input type=\"".$tipo."\" class=\"form-control\" name=\"".$nomeCampo."\" />
                </div>
            </div>";
    }

    public function end(string $btnMessage)
    {
        $this->html = $this->html.
            "<div class=\"form-group\">
            <div class=\"col-xs-9 col-xs-offset-3\">
                <button type=\"submit\" class=\"btn btn-primary\" name=\"enviarDados\" value=\"Sign up\">".$btnMessage."</button>
            </div>
        </div>
    </form>
</div>
</body>";
        return $this->html;
    }

}