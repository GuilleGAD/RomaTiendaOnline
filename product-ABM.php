<?php
try{
        // Conexión a la base de datos
    $connect = new PDO('mysql:host=localhost;dbname=nueva', 'root', '');
    $connect ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // Sacar un resultado

    if(isset($_POST['actions'])){
        
        $nombre = $_POST['nombre'];
        $precio = $_POST['precio'];
        $categoria_id = $_POST['categoria_id'];
            
        if($_POST['actions'] == 'edit'){
            $SQL = 'UPDATE productos SET 
            nombre = "'.$nombre.'",
            precio = "'.$precio.'",
            categoria_id = "'.$categoria_id.'"
            WHERE id = '.$_GET['id'].';';
        }
        if($_POST['actions'] == 'add'){
            $SQL = 'INSERT INTO productos (nombre, precio, categoria_id) 
            VALUES ("'.$nombre.'", "'.$precio.'", '.$categoria_id.');';
        }

        $query = $connect->prepare($SQL);
        $query->execute();

        header('Location: index.php');
        exit;
    }

    $query = $connect->prepare("SELECT * FROM categorias");
    $query->execute();
    $categorias = $query->fetchAll(PDO::FETCH_ASSOC);

    $SQL = 'SELECT p.*, c.nombre AS categoria 
            FROM productos p  
            LEFT JOIN categorias c ON c.id = p.categoria_id 
            WHERE 1 AND p.borrado = 0
            ';

    $query = $connect->prepare($SQL);
    $query->execute();
    $productos = $query->fetchAll(PDO::FETCH_ASSOC);

}catch(PDOException $e){
    echo "ERROR: " . $e->getMessage();
}

$actions = 'list';
if(isset($_GET['actions'])){
    $actions = $_GET['actions'];
    if($actions =='edit' && $_GET['id'] != ''){
       $SQL = 'SELECT p.*
        FROM productos p  
        WHERE id = "'.$_GET['id'].'"';
        $query = $connect->prepare($SQL);
        $query->execute();
        $producto = $query->fetch(PDO::FETCH_ASSOC);
    }
    if($actions =='delete' && $_GET['id'] != ''){
        $SQL = 'update productos SET borrado = 1 
        WHERE id = "'.$_GET['id'].'"';
        $query = $connect->prepare($SQL);
        $query->execute();
        header('Location: index.php');
        exit;
    }
}

error_reporting(0);
ini_set('display_errors', 0);


?>
<style type="text/css">
    label{ width: 100%; padding: 20px; display: block; }
    table{ width: 100%; padding: 20px; display: block; }
    td{ border: 1px solid #000; padding: 20px; }
</style>

<?php if($actions == 'list') {?>
    <h1>listado de productos</h1>
    <a href="index.php?actions=add">agregar nuevo producto</a>
    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Precio</th>
                <th>Categoria</th>
                <th>....</th>
                <th>....</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($productos as $producto) {?>
            <tr>
                <td><?php echo $producto['id']?></td>
                <td><?php echo $producto['nombre']?></td>
                <td><?php echo $producto['precio']?></td>
                <td><?php echo $producto['categoria']?></td>
                <td>
                    <a href="index.php?actions=edit&id=<?php echo $producto['id']?>">editar</a>
                </td><td>
                    <a href="index.php?actions=delete&id=<?php echo $producto['id']?>" onclick="return confirm('¿Desea eliminar?');">eliminar</a>
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
<?php } ?>


<?php if($actions != 'list') {?>

    <h1>abm producto</h1>
    <form method="POST" action="">
        <label>Nombre
            <input type="text" name="nombre" value="<?php echo $producto['nombre'];?>">
        </label>
        <label>Precio
            <input type="text" name="precio" value="<?php echo $producto['precio'];?>">
        </label>
        <label>Categoria
            <select name="categoria_id">
                <option value="">seleccione...</option>
                <?php 
                foreach ($categorias as $key => $fila) { 
                    $sel = '';
                    if($fila['id'] == $producto['categoria_id'])
                        $sel = 'selected';
                    ?>
                    <option value="<?php echo $fila['id'];?>" <?php echo $sel;?>><?php echo $fila['nombre'];?></option>
                <?php 
                }
                ?>
            </select>
        </label>
        <button type="submit">Enviar</button>
        <input type="hidden" name="actions" value="<?php echo $actions?>">
        
    </form>
<?php } ?>
