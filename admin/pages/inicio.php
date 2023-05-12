<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/inicio.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <title>Inicio</title>
</head>

<body>
    <main>
        <!-- video components: https://www.youtube.com/watch?v=DWrr8z3_buQ -->
        <comp-menu class="component_menu"></comp-menu>
        <section>
            <div class="btn_producto">
                <a href="">Agrregar producto</a>
            </div>

            <table>

                <thead>
                    <tr>
                        <th scope="col">Grupo</th>
                        <th scope="col">Año de formación</th>
                        <th scope="col">Número de álbumes</th>
                        <th scope="col">Canción más conocida</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">Buzzcocks</th>
                        <td>1976</td>
                        <td>9</td>
                        <td>Ever fallen in love (with someone you shouldn't've)</td>
                    </tr>
                    <tr>
                        <th scope="row">The Clash</th>
                        <td>1976</td>
                        <td>6</td>
                        <td>London Calling</td>
                    </tr>
                    <tr>
                        <th scope="row">The Stranglers</th>
                        <td>1974</td>
                        <td>17</td>
                        <td>No More Heroes</td>
                    </tr>
                </tbody>
                <tfoot>
                    <tr>
                        <th scope="row" colspan="2">Número total de álbumes</th>
                        <td colspan="2">77</td>
                    </tr>
                </tfoot>
            </table>

        </section>
    </main>
    <script src="../components/menu.js"></script>
    <script src="../js/menu.js"></script>
</body>

</html>