<?php
/**
 * Created by PhpStorm.
 * User: igort
 * Date: 12/12/2017
 * Time: 10:16
 */

namespace  src\controller;

class createForms
{
    public $html;

    public function __construct(string $url)
    {
        echo
            "<body>
                <div style=\" margin: 5% 12.5%; position: relative; top:0 \"><br>
                <form action=".$url." method=\"POST\" id=\"basicBootstrapForm\" class=\"form-horizontal\">
                <fieldset>";
    }

    public function input(string $tipo, $label, string $nomeCampo)
    {
        echo
            "<div class=\"form-group\">
                <label class=\"col-xs-3 control-label\">".$label."</label>
                <div class=\"col-xs-3\">
                    <input type=\"".$tipo."\" class=\"form-control\" name=\"".$nomeCampo."\" />
                </div>
            </div>";

    }

    static function GridView(array $dados, array $membros){
        echo "<table class=\"table table-bordered table-hover\">
                <tbody>
                    <tr>";
        foreach ($membros as $m){
            echo "<td>".$m."</td>";
        }
        echo "</tr>";
        foreach ($dados as $d){
            echo "<tr>";
            foreach ($membros as $m => $metodo){
                echo "<td>".$d->$metodo."</td>";
            }
            echo "</tr>";
        }
        echo "</tbody>
        </table>";
    }

    public function end(string $btnMessage)
    {
        echo
            "<div class=\"form-group\">
            <div class=\"col-xs-9 col-xs-offset-3\">
                <button type=\"submit\" class=\"btn btn-primary\" name=\"enviarDados\" value=\"Sign up\">".$btnMessage."</button>
            </div>
        </div>
    </form>
</div>
</body>";
    }

}