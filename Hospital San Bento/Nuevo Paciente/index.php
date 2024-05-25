<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <header>Registro del paciente
            
        </header>  
       
        <form action="#">
            <div class="form first">
                <div class="details personal">
                    <span class="title">detalles</span>

                    <div class="input-group">
                        <div class="input-field">
                            <input type="text" placeholder="Buscar Paciente">
                        </div>
                        
                    </div>
                    

                    <div class="fields">
                        <div class="input-field">
                            <label>Codigo Del paciente</label>
                            <input type="text" placeholder="" required>
                        </div>

                        <div class="input-field">
                            <label>Nombre completo</label>
                            <input type="text" placeholder="" required>
                        </div>

                        <div class="input-field">
                            <label>DPI</label>
                            <input type="number" placeholder="" required>
                        </div>

                        <div class="input-field">
                            <label>edad</label>
                            <input type="number" placeholder="" required>
                        </div>

                        <div class="input-field">
                            <label>Cuenta con Seguro Medico</label>
                            <select required>
                                <option disabled selected>Seleccione una opcion</option>
                                <option>SI</option>
                                <option>NO</option>
                               
                            </select>
                        </div>

                        <div class="input-field">
                            <label>Fecha de nacimiento</label>
                            <input type="date" placeholder="" required>
                        </div>

                        <div class="input-field">
                            <label>Direccion</label>
                            <input type="text" placeholder="" required>
                        </div>
                        <div class="input-field">
                            <label>Grupo  Sanguineo</label>
                            <input type="text" placeholder="" required>
                        </div>
                        <div class="input-field">
                            <label>Telefono</label>
                            <input type="number" placeholder="" required>
                        </div>
                        <div class="input-field">
                            <label>Estado Civil</label>
                            <select required>
                                <option disabled selected>Seleccione una opcion</option>
                                <option>Casado</option>
                                <option>Soltero</option>
                               
                            </select>
                        </div>
                     
            </div>
            <div class="buttons">
                        <div class="backBtn">
                            <i class="uil uil-navigator"></i>
                            <span class="btnText">Cancelar</span>
                        </div>
                        
                        <button class="sumbit">
                            <span class="btnText">Guardar</span>
                            <i class="uil uil-navigator"></i>
                        </button>

                        <button class="sumbit">
                            <span class="btnText">Eliminar</span>
                            <i class="uil uil-navigator"></i>
                        </button>
                    </div>


                </div> 
            </div>
        </form>



    
    


            </div>
        </div>
    </div>

    <script>
   
    </script>
    <script src="script.js"></script>
</body>
</html>
