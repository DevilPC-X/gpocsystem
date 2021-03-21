CREATE DATABASE db_obracivil;
USE db_obracivil;

/*ID, NOMBRE ---------------> TABLE: CATEGORIES*/
INSERT INTO categorias VALUES(NULL, 'Sin Categoria');
INSERT INTO categorias VALUES(NULL, 'Materiales Metalicos');
INSERT INTO categorias VALUES(NULL, 'Materiales de Concreto');
INSERT INTO categorias VALUES(NULL, 'Materiales de Arcilla');
INSERT INTO categorias VALUES(NULL, 'Materiales de Plastico');
INSERT INTO categorias VALUES(NULL, 'Otros');

/*ID, NOMBRE----------------> TABLE: PROVIDERS*/
INSERT INTO proveedores VALUES(NULL, 'Sin Proveedor');
INSERT INTO proveedores VALUES(NULL, 'El Cerrito');
INSERT INTO proveedores VALUES(NULL, 'Mas Ferreterias');

/*ID, NOMBRE----------------> TABLE: PROJECTS*/
INSERT INTO proyectos VALUES(NULL, 'Lozas');
INSERT INTO proyectos VALUES(NULL, 'Cimientos');
INSERT INTO proyectos VALUES(NULL, 'Paredes');
INSERT INTO proyectos VALUES(NULL, 'Pisos');

/*TABLE: SUPPLIES*/
/*ID, NOMBRE, UNIDAD, PRECIO_UNITARIO, IDCATEGORIA, IDPROYECTO, IDPROVEEDOR, IDINSUMO*/
INSERT INTO insumos VALUES(NULL, 'Varillas de 3/8', 'pieza', 93.00, 2, 1, 2, 1);
INSERT INTO insumos VALUES(NULL, 'Varillas de 3/8', 'pieza', 93.00, 2, 2, 2, 1);
INSERT INTO insumos VALUES(NULL, 'Varillas de 3/8', 'pieza', 93.00, 2, 3, 2, 1);
INSERT INTO insumos VALUES(NULL, 'Varillas de 1/2', 'pieza', 169.00, 2, 1, 2, 1);
INSERT INTO insumos VALUES(NULL, 'Varillas de 1/2', 'pieza', 169.00, 2, 2, 2, 1);
INSERT INTO insumos VALUES(NULL, 'Varillas de 1/2', 'pieza', 169.00, 2, 3, 2, 1);
INSERT INTO insumos VALUES(NULL, 'Varillas de 3/4', 'pieza', 385.00, 2, 1, 2, 1);
INSERT INTO insumos VALUES(NULL, 'Varillas de 3/4', 'pieza', 385.00, 2, 2, 2, 1);
INSERT INTO insumos VALUES(NULL, 'Varillas de 3/4', 'pieza', 385.00, 2, 3, 2, 1);
INSERT INTO insumos VALUES(NULL, 'Alambron', 'kilogramo', 16.50, 2, 2, 2, 1);
INSERT INTO insumos VALUES(NULL, 'Alambron', 'kilogramo', 16.50, 2, 3, 2, 1);
INSERT INTO insumos VALUES(NULL, 'Grava', 'm³', 500.00, 3, 1, 2, 1);
INSERT INTO insumos VALUES(NULL, 'Grava', 'm³', 500.00, 3, 2, 2, 1);
INSERT INTO insumos VALUES(NULL, 'Grava', 'm³', 500.00, 3, 3, 2, 1);
INSERT INTO insumos VALUES(NULL, 'Grava', 'm³', 500.00, 3, 4, 2, 1);
INSERT INTO insumos VALUES(NULL, 'Alambre Quemado', 'kilogramo', 19.00, 2, 1, 2, 1);
INSERT INTO insumos VALUES(NULL, 'Alambre Quemado', 'kilogramo', 19.00, 2, 2, 2, 1);
INSERT INTO insumos VALUES(NULL, 'Alambre Quemado', 'kilogramo', 19.00, 2, 3, 2, 1);
INSERT INTO insumos VALUES(NULL, 'Alambre Quemado', 'kilogramo', 19.00, 2, 4, 2, 1);
INSERT INTO insumos VALUES(NULL, 'Cemento Anahuac de 50 kg', 'bulto', 168.00, 4, 1, 2, 1);
INSERT INTO insumos VALUES(NULL, 'Cemento Anahuac de 50 kg', 'bulto', 168.00, 4, 2, 2, 1);
INSERT INTO insumos VALUES(NULL, 'Cemento Anahuac de 50 kg', 'bulto', 168.00, 4, 3, 2, 1);
INSERT INTO insumos VALUES(NULL, 'Cemento Anahuac de 50 kg', 'bulto', 168.00, 4, 4, 2, 1);
INSERT INTO insumos VALUES(NULL, 'Cemento Fortaleza de 50 kg', 'bulto', 150.00, 4, 1, 2, 1);
INSERT INTO insumos VALUES(NULL, 'Cemento Fortaleza de 50 kg', 'bulto', 150.00, 4, 2, 2, 1);
INSERT INTO insumos VALUES(NULL, 'Cemento Fortaleza de 50 kg', 'bulto', 150.00, 4, 3, 2, 1);
INSERT INTO insumos VALUES(NULL, 'Cemento Fortaleza de 50 kg', 'bulto', 150.00, 4, 4, 2, 1);
INSERT INTO insumos VALUES(NULL, 'Block N°12', 'pza', 8.00, 3, 3, 2, 1);
INSERT INTO insumos VALUES(NULL, 'Arena', 'm³', 500.00, 4, 3, 2, 1);
INSERT INTO insumos VALUES(NULL, 'Arena', 'm³', 500.00, 4, 4, 2, 1);
INSERT INTO insumos VALUES(NULL, 'Manguera', 'metro', 6.50, 5, 1, 2, 1);
INSERT INTO insumos VALUES(NULL, 'Clavo de 2 pulgadas', 'kilogramo', 24.00, 2, 1, 2, 1);
INSERT INTO insumos VALUES(NULL, 'Clavo de 2.5 pulgadas', 'kilogramo', 24.00, 2, 1, 2, 1);
INSERT INTO insumos VALUES(NULL, 'Clavo de 3 pulgadas', 'kilogramo', 24.00, 2, 1, 2, 1);
INSERT INTO insumos VALUES(NULL, 'Clavo de 3.5 pulgadas', 'kilogramo', 24.00, 2, 1, 2, 1);
INSERT INTO insumos VALUES(NULL, 'Clavo de 4 pulgadas', 'kilogramo', 24.00, 2, 1, 2, 1);
INSERT INTO insumos VALUES(NULL, 'Malla Piso', 'metro', 50.00, 2, 4, 2, 1);
INSERT INTO insumos VALUES(NULL, 'Pega Azulejo', 'bulto', 85.00, 6, 4, 2, 1);
INSERT INTO insumos VALUES(NULL, 'Cable del N°12', 'metro', 12.00, 6, 3, 2, 1);
INSERT INTO insumos VALUES(NULL, 'Contactos dobles', 'pieza', 38.00, 6, 3, 2, 1);
INSERT INTO insumos VALUES(NULL, 'Contactos y Apagadores', 'pieza', 38.00, 6, 3, 2, 1);
INSERT INTO insumos VALUES(NULL, 'Cinta de Aislar', 'pieza', 14.00, 3, 2, 1);
INSERT INTO insumos VALUES(NULL, 'Cegueta', 'pieza', 24.00, 3, 2, 1);

/*ID, NOMBRE, UNIDAD, PRECIO_UNITARIO, IDCATEGORIA, IDPROYECTO, IDPROVEEDOR, IDINSUMO*/
INSERT INTO insumos VALUES(NULL, 'Varillas de 3/8', 'pieza', 93.20, 2, 1, 3, 1);
INSERT INTO insumos VALUES(NULL, 'Varillas de 3/8', 'pieza', 93.20, 2, 2, 3, 1);
INSERT INTO insumos VALUES(NULL, 'Varillas de 3/8', 'pieza', 93.20, 2, 3, 3, 1);
INSERT INTO insumos VALUES(NULL, 'Varillas de 1/2', 'pieza', 170.24, 2, 1, 3, 1);
INSERT INTO insumos VALUES(NULL, 'Varillas de 1/2', 'pieza', 170.24, 2, 2, 3, 1);
INSERT INTO insumos VALUES(NULL, 'Varillas de 1/2', 'pieza', 170.24, 2, 3, 3, 1);
INSERT INTO insumos VALUES(NULL, 'Varillas de 3/4', 'pieza', 418.40, 2, 1, 3, 1);
INSERT INTO insumos VALUES(NULL, 'Varillas de 3/4', 'pieza', 418.40, 2, 2, 3, 1);
INSERT INTO insumos VALUES(NULL, 'Varillas de 3/4', 'pieza', 418.40, 2, 3, 3, 1);
INSERT INTO insumos VALUES(NULL, 'Alambron', 'kilogramo', 16.60, 2, 2, 3, 1);
INSERT INTO insumos VALUES(NULL, 'Alambron', 'kilogramo', 16.60, 2, 3, 3, 1);
INSERT INTO insumos VALUES(NULL, 'Grava', 'm³', 495.00, 3, 1, 3, 1);
INSERT INTO insumos VALUES(NULL, 'Grava', 'm³', 495.00, 3, 2, 3, 1);
INSERT INTO insumos VALUES(NULL, 'Grava', 'm³', 495.00, 3, 3, 3, 1);
INSERT INTO insumos VALUES(NULL, 'Grava', 'm³', 495.00, 3, 4, 3, 1);
INSERT INTO insumos VALUES(NULL, 'Alambre Quemado', 'kkilogramog', 19.40, 2, 1, 3, 1);
INSERT INTO insumos VALUES(NULL, 'Alambre Quemado', 'kilogramo', 19.40, 2, 2, 3, 1);
INSERT INTO insumos VALUES(NULL, 'Alambre Quemado', 'kilogramo', 19.40, 2, 3, 3, 1);
INSERT INTO insumos VALUES(NULL, 'Alambre Quemado', 'kilogramo', 19.40, 2, 4, 3, 1);
INSERT INTO insumos VALUES(NULL, 'Cemento Anahuac de 50 kg', 'bulto', 159.00, 4, 1, 3, 1);
INSERT INTO insumos VALUES(NULL, 'Cemento Anahuac de 50 kg', 'bulto', 159.00, 4, 2, 3, 1);
INSERT INTO insumos VALUES(NULL, 'Cemento Anahuac de 50 kg', 'bulto', 159.00, 4, 3, 3, 1);
INSERT INTO insumos VALUES(NULL, 'Cemento Anahuac de 50 kg', 'bulto', 159.00, 4, 4, 3, 1);
INSERT INTO insumos VALUES(NULL, 'Cemento Apasco de 50 kg', 'bulto', 150.00, 4, 1, 3, 1);
INSERT INTO insumos VALUES(NULL, 'Cemento Apasco de 50 kg', 'bulto', 150.00, 4, 2, 3, 1);
INSERT INTO insumos VALUES(NULL, 'Cemento Apasco de 50 kg', 'bulto', 150.00, 4, 3, 3, 1);
INSERT INTO insumos VALUES(NULL, 'Cemento Apasco de 50 kg', 'bulto', 150.00, 4, 4, 3, 1);
INSERT INTO insumos VALUES(NULL, 'Block N°12', 'pieza', 8.10, 3, 3, 3, 1);
INSERT INTO insumos VALUES(NULL, 'Arena', 'm³', 495.00, 4, 3, 3, 1);
INSERT INTO insumos VALUES(NULL, 'Arena', 'm³', 495.00, 4, 4, 3, 1);
INSERT INTO insumos VALUES(NULL, 'Manguera', 'metro', 6.50, 5, 1, 3, 1);
INSERT INTO insumos VALUES(NULL, 'Clavo de 2 pulgadas', 'kilogramo', 24.00, 2, 1, 3, 1);
INSERT INTO insumos VALUES(NULL, 'Clavo de 2.5 pulgadas', 'kilogramo', 24.00, 2, 1, 3, 1);
INSERT INTO insumos VALUES(NULL, 'Clavo de 3 pulgadas', 'kilogramo', 24.00, 2, 1, 3, 1);
INSERT INTO insumos VALUES(NULL, 'Clavo de 3.5 pulgadas', 'kkilogramo', 24.00, 2, 1, 3, 1);
INSERT INTO insumos VALUES(NULL, 'Clavo de 4 pulgadas', 'kilogramo', 24.00, 2, 1, 3, 1);
INSERT INTO insumos VALUES(NULL, 'Malla Piso', 'metro', 15.06, 2, 4, 3, 1);
INSERT INTO insumos VALUES(NULL, 'Pega Azulejo', 'bulto', 111.00, 6, 4, 3, 1);
INSERT INTO insumos VALUES(NULL, 'Cable del N°12', 'metro', 8.40, 6, 3, 3, 1);
INSERT INTO insumos VALUES(NULL, 'Contacto sobreponer', 'pieza', 7.00, 6, 3, 3, 1);
INSERT INTO insumos VALUES(NULL, 'Contacto mas placa oculto', 'pieza', 22.00, 6, 3, 3, 1);
INSERT INTO insumos VALUES(NULL, 'Cinta de Aislar', 'pieza', 15.00, 6, 3, 3, 1);
INSERT INTO insumos VALUES(NULL, 'Cegueta', 'pieza', 24.00, 6, 3, 3, 1);

INSERT INTO insumos VALUES(NULL, 'Ayudante de Albañil', 'dia', 250.00, 1, 1, 1, 2);
INSERT INTO insumos VALUES(NULL, 'Ayudante de Albañil', 'dia', 250.00, 1, 2, 1, 2);
INSERT INTO insumos VALUES(NULL, 'Ayudante de Albañil', 'dia', 250.00, 1, 3, 1, 2);
INSERT INTO insumos VALUES(NULL, 'Ayudante de Albañil', 'dia', 250.00, 1, 4, 1, 2);
INSERT INTO insumos VALUES(NULL, 'Albañil', 'dia', 300.00, 1, 1, 1, 2);
INSERT INTO insumos VALUES(NULL, 'Albañil', 'dia', 300.00, 1, 2, 1, 2);
INSERT INTO insumos VALUES(NULL, 'Albañil', 'dia', 300.00, 1, 3, 1, 2);
INSERT INTO insumos VALUES(NULL, 'Albañil', 'dia', 300.00, 1, 4, 1, 2);

INSERT INTO insumos VALUES(NULL, 'Revolvedora', 'dia', 600.00, 1, 1, 2, 3)
INSERT INTO insumos VALUES(NULL, 'Revolvedora', 'dia', 800.00, 1, 1, 3, 3)

/*php artisan migrate:refresh --seed*/

