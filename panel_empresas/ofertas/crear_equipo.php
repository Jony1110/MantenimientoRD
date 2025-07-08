<?php
session_start();
$ocultar_footer = true;
require('../../libreria/motor.php');
require('../../libreria/plantilla.php');

if (!isset($_SESSION['id_empresa'])) {
    header("Location: ../../general/Login_y_Registro/login.php");
    exit();
}

$id_empresa = $_SESSION['id_empresa'];
plantilla::aplicar();
plantilla::navbar();

// Procesar formulario
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    require('../../libreria/bd/conexion.php');

    $tipo = $_POST['tipo_equipo'];
    $nombre = $_POST['nombre'] ?? '';
    $marca = $_POST['marca'] ?? '';
    $modelo = $_POST['modelo'] ?? '';
    $fecha_adquisicion = $_POST['fecha_adquisicion'] ?? '';
    $frecuencia_mto = intval($_POST['frecuencia_mto'] ?? 0);
    $fecha_proximo_mto = date('Y-m-d', strtotime("+$frecuencia_mto days"));

    // Campos específicos
    $detalle_especifico = '';
    if ($tipo === 'tecnologico') {
        $detalle_especifico = $_POST['tipo_tecnologia'] ?? '';
    } elseif ($tipo === 'herramienta') {
        $detalle_especifico = $_POST['tipo_herramienta'] ?? '';
    } elseif ($tipo === 'vehiculo') {
        $detalle_especifico = $_POST['tipo_vehiculo'] ?? '';
    }

    $sql = "INSERT INTO equipos (id_empresa, tipo, nombre, marca, modelo, fecha_adquisicion, frecuencia_mto, proximo_mto, detalle)
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("isssssiss", $id_empresa, $tipo, $nombre, $marca, $modelo, $fecha_adquisicion, $frecuencia_mto, $fecha_proximo_mto, $detalle_especifico);

    if ($stmt->execute()) {
        echo "<script>alert('✅ Equipo registrado correctamente'); window.location.href='mis_equipos.php';</script>";
    } else {
        echo "<script>alert('❌ Error al registrar');</script>";
    }

    $stmt->close();
    $conn->close();
}
?>

<div class="container mt-5">
    <h2 class="mb-4">Registrar Nuevo Equipo</h2>
    <form method="POST">
        <div class="mb-3">
            <label class="form-label">Tipo de equipo</label>
            <select name="tipo_equipo" id="tipo_equipo" class="form-select" required>
                <option value="">Seleccione</option>
                <option value="tecnologico">Equipo Tecnológico</option>
                <option value="herramienta">Herramienta</option>
                <option value="vehiculo">Vehículo</option>
            </select>
        </div>

        <div class="mb-3">
            <label class="form-label">Nombre</label>
            <input type="text" name="nombre" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Marca</label>
            <input type="text" name="marca" class="form-control">
        </div>

        <div class="mb-3">
            <label class="form-label">Modelo</label>
            <input type="text" name="modelo" class="form-control">
        </div>

        <!-- Campos según tipo -->
        <div id="campos_tecnologicos" style="display:none;" class="mb-3">
            <label class="form-label">Tipo de equipo tecnológico</label>
            <select name="tipo_tecnologia" class="form-select">
                <option value="laptop">Laptop</option>
                <option value="desktop">PC de Escritorio</option>
                <option value="impresora">Impresora</option>
                <option value="router">Router</option>
                <option value="servidor">Servidor</option>
            </select>
        </div>

        <div id="campos_herramientas" style="display:none;" class="mb-3">
            <label class="form-label">Tipo de herramienta</label>
            <select name="tipo_herramienta" class="form-select">
                <option value="destornillador">Destornillador</option>
                <option value="taladro">Taladro</option>
                <option value="multimetro">Multímetro</option>
                <option value="pinza">Pinza</option>
            </select>
        </div>

        <div id="campos_vehiculos" style="display:none;" class="mb-3">
            <label class="form-label">Tipo de vehículo</label>
            <select name="tipo_vehiculo" class="form-select">
                <option value="carro">Carro</option>
                <option value="camioneta">Camioneta</option>
                <option value="camion">Camión</option>
                <option value="motocicleta">Motocicleta</option>
            </select>
        </div>

        <div class="mb-3">
            <label class="form-label">Fecha de adquisición</label>
            <input type="date" name="fecha_adquisicion" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Frecuencia de mantenimiento (en días)</label>
            <select name="frecuencia_mto" class="form-select" required>
                <option value="">Seleccione</option>
                <option value="30">Cada 30 días</option>
                <option value="90">Cada 3 meses</option>
                <option value="180">Cada 6 meses</option>
                <option value="365">Cada año</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Registrar Equipo</button>
    </form>
</div>

<script>
document.getElementById("tipo_equipo").addEventListener("change", function() {
    let tipo = this.value;
    document.getElementById("campos_tecnologicos").style.display = (tipo === "tecnologico") ? "block" : "none";
    document.getElementById("campos_herramientas").style.display = (tipo === "herramienta") ? "block" : "none";
    document.getElementById("campos_vehiculos").style.display = (tipo === "vehiculo") ? "block" : "none";
});
</script>
