<?php
    if(isset($_REQUEST['calcular'])){
        $operacion = $_REQUEST['operacion'];
        $v1 = ($_REQUEST['v1'] != "")? $_REQUEST['v1'] : 0;
        $v2 = ($_REQUEST['v2'] != "")? $_REQUEST['v2'] : 0;
        $resultado = 0;
        switch ($operacion) {
            case 'sum':
                $resultado = $v1 + $v2;
            break;
            case 'res':
                $resultado = $v1 - $v2;
            break;
            case 'mul':
                $resultado = $v1 * $v2;
            break;
            case 'div':
                if($v2 != 0)
                    $resultado = $v1 / $v2;
                else
                    $resultado = 0;
            break;
            case 'exp':
                $resultado = $v1 ** $v2;
            break;

            default:
                # code...
                break;
        }
    }
?>
<form action="" method="post">
    <table>
        <tr>
            <th colspan="3">Calculadora PHP</th>
        </tr>
        <tr>
            <td colspan="2">
                <select name="operacion" id="">
                    <option value="sum">Sumar</option>
                    <option value="res">Restar</option>
                    <option value="mul">Multiplicar</option>
                    <option value="div">Dividir</option>
                    <option value="exp">Exponente</option>
                </select>
            </td>
            <td rowspan="3"><img src="./images/calculadora.png" alt=""></td>       
        </tr>
        <tr>
            <td>
                <label for="v1">Valor 1</label><br>
                <input type="number" name="v1" id="" value="<?php if (isset($v1)) echo $v1; ?>">
            </td>
            <td>
                <label for="v2">Valor 2</label><br>
                <input type="number" name="v2" id="" value="<?php if (isset($v2)) echo $v2; ?>">
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <label for="res">RESULTADO</label><br>
                <input type="number" name="res" disabled value="<?php if (isset($resultado)) echo $resultado; ?>">
            </td>
        </tr>
        <tr><td colspan="3"><button type="submit" name="calcular">Calcular</button></td></tr>
    </table>
</form>