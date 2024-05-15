  <!-- Begin Page Content -->
  <div class="container-fluid">
      <!-- Page Heading -->
      <div class="d-sm-flex align-items-center justify-content-between mb-4">
          <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
          <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
      </div>

      <!-- Content Row -->
      <h2>SEGURIDAD ESTRUCTURAL DE LAS IES</h2>
      <form action="procesar_primer_form.php">
          <label for="item1">LA IES HA SUFRIDO DAÑOS POR EVENTOS PELIGROSOS ANTERIORES</label>
          <br>


          <select id="item1" name="item1">
              <option value="1" class="item1">Daños o nulos o edificio reparado completamente</option>
              <option value="2" class="item2">Daños menores </option>
              <option value="3" class="item3">Daños moderados y reparación parcial del edificio;</option>
              <option value="4" class="item4">Daños mayores que no se han reparado;</option>
          </select>

          <br>

          <br>

          <label for="item2">LA IES HA SIDO CONSTRUÍDA O REPARADA SEGÚN LA NEC</label>

          <br>


          <select id="item2" name="item2">
              <option value="1" class="item1">La Norma Ecuatoriana de Construcción se aplicó cabalmente
              </option>
              <option value="2" class="item2">La Norma Ecuatoriana de Construcción se aplicó de manera
                  incipiente;</option>
              <option value="3" class="item3">Opción 3</option>
              <option value="4" class="item4">No se aplicó La Norma Ecuatoriana de Construcción</option>
          </select>

          <br>

          <br>

          <label for="item3">LA IES HA SIDO REMODELADA, REPARADA, ADAPTADA BAJO CONDICIONES
              ESTÁNDAR</label>

          <br>


          <select id="item3" name="item3">
              <option value="1" class="item1">No se ha efectuado modificaciones</option>
              <option value="2" class="item2">Se ha hecho remodelaciones o modificaciones moderadas
              </option>
              <option value="3" class="item3"></option>
              <option value="4" class="item4">Se ha hecho remodelaciones o modificaciones que ejercen un
                  efecto mayor sobre la estructura</option>
          </select>

          <br>

          <br>

          <label for="item4">DISEÑO ESTRUCTURAL DE LA IES</label>

          <br>


          <select id="item4" name="item4">
              <option value="1" class="item1">Adecuado diseño estrutural</option>
              <option value="2" class="item2">Diseño regular del sistema estructural</option>
              <option value="3" class="item3">Diseño deficiente del sistema estructural</option>
              <option value="4" class="item4">Muy mal diseño del sistema estructural</option>
          </select>

          <br>

          <br>

          <label for="item5">CONDICIÓN ACTUAL DE LA ESTRUCTURA</label>

          <br>


          <select id="item5" name="item5">
              <option value="1" class="item1">No se observó deterioro ni grietas</option>
              <option value="2" class="item2">Pequeñas señales de deterioro causado por el clima o
                  envejecimiento normal</option>
              <option value="3" class="item3">Deterioro causado por el clima o el envejecimiento normal,
                  sin presencia de grietas</option>
              <option value="4" class="item4">Deterioro causado por el clima o el envejecimiento normal;
                  grietas en la planta baja y el primer piso</option>
          </select>

          <br>

          <br>

          <label for="item6">CONDICIÓN ACTUAL DE LOS MATERIALES DE CONSTRUCCIÓN</label>

          <br>


          <select id="item6" name="item6">
              <option value="1" class="item1">Sin grietas en hormigón ni deformaciones en madera o acero,
                  sin herrumbre o descascaramiento</option>
              <option value="2" class="item2">Grietas menores de 1 mm en hormigón, pequeñas deformaciones
                  visibles en acero o madera, herrumbre sin descascaramiento</option>
              <option value="3" class="item3">Grietas entre 1 y 3 mm en hormigón, deformaciones moderadas
                  y visibles en acero o madera, herrumbre sin descascaramiento</option>
              <option value="4" class="item4">Grietas mayores a 3 mm en hotmigón, deformaciones ecesivas
                  en acero o madera, herrumbre y descascaramiento</option>
          </select>

          <br>

          <br>

          <label for="item7">INTERACCIÓN NO ESTRUCTURAL-ESTRUCTURAL</label>

          <br>


          <select id="item7" name="item7">
              <option value="1" class="item1">Ningún elemento no estructural afecta a la estructura.
              </option>
              <option value="2" class="item2">Tabiques unidos parcialmente a la estructura.</option>
              <option value="3" class="item3">Tabiques unidos rígidamente a la estructura, los cielos
                  rasos suspendidos interactúan parcialmente con la estructura. </option>
          </select>

          <br>

          <br>

          <label for="item8">LA IES TIENE UNA SEPARACIÓN ENTRE EDIFICIOS BAJO NORMA DE LA NEC</label>

          <br>


          <select id="item8" name="item8">
              <option value="1" class="item1">Separación superior al 1,5% de la altura del más bajo de los
                  dos edificios adyacentes</option>
              <option value="2" class="item2">Separación entre el 0,5 y el 1,5% de la altura del más bajo
                  de los edificios adyacentes</option>
              <option value="3" class="item3">Separación inferior al 0,5% de la altura del más bajo de los
                  edificios adyacentes</option>
              <option value="4" class="item4">No existe separación entre edificios adyacentes</option>
          </select>

          <br>

          <br>

          <label for="item9">REDUNDANCIA ESTRUCTURAL</label>

          <br>


          <select id="item9" name="item9">
              <option value="0" class="bg-dark">Mas de tres líneas de resistncia en cada dirección
              </option>
              <option value="0" class="bg-dark">Tres líneas de resistencia en cada dirección</option>
              <option value="0" class="bg-dark">Menos de tres líneas de resistencia en cada direcciòn
              </option>
              <option value="0" class="bg-dark">Sin líneas de resistencia</option>
          </select>

          <br>

          <br>

          <label for="item10">RELACIÓN DE RESISTENCIA ENTRE COLUMNAS Y VIGAS</label>

          <br>


          <select id="item10" name="item10">
              <option value="1" class="item1">La resistencia de las columnas es mayor que la de las vigas
              </option>
              <option value="2" class="item2">La resistencia de las vigas es semejante a la de las
                  columnas</option>
              <option value="3" class="item3">La resistencia de las vigas es apenas mayor que las columnas
              </option>
              <option value="4" class="item4">La resistencia de las vigas es obviamente mayor que la de
                  las columnas</option>
          </select>

          <br>

          <br>

          <label for="item11">DETALLES ESTRUCTURALES</label>

          <br>


          <select id="item11" name="item11">
              <option value="1" class="item1">Construido según las normas vigentes</option>
              <option value="2" class="item2">Se construyó con normas de diseño anterior, no se han
                  realizado obras para adaptar la estructura a la normativa actual</option>
              <option value="3" class="item3">Se construyó con normas de diseño anterior. Se han realizado
                  obras para adaptar la estructura a la normativa vigente</option>
              <option value="4" class="item4">No existen registros de resistencia de las columnas y de las
                  vigas, no se siguen normas de diseño actuales</option>
          </select>

          <br>

          <br>

          <label for="item12">SEGURIDAD DE LOS CIMIENTOS</label>

          <br>


          <select id="item12" name="item12">
              <option value="1" class="item1">Datos firmes de que los cimientos se diseñaron según las
                  normas y de que no hay daños.</option>
              <option value="2" class="item2">Datos escasos, planos sin estándar.</option>
              <option value="3" class="item3">Datos escasos, planos desactualizados y sin certificación,
                  sin evidencia de diseño de cimientos según normas</option>
              <option value="4" class="item4">Sin datos de diseño según norma, se encuentran indicios de
                  daños, no existen planos </option>
          </select>

          <br>

          <br>

          <label for="item13">PATOLOGÍA DE LA ESTRUCTURA</label>

          <br>


          <select id="item13" name="item13">
              <option value="1" class="item1">Sin patología </option>
              <option value="2" class="item2">Patología pequeña </option>
              <option value="3" class="item3">Patología grave </option>
              <option value="4" class="item4">Patología extensiva </option>
          </select>

          <br>

          <br>

          <label for="item14">MATERIAL ESTRUCTURAL A LA VISTA</label>

          <br>


          <select id="item14" name="item14">
              <option value="1" class="item1">Sin material estructural a la vista </option>
              <option value="2" class="item2">Poco material estructural a la vista </option>
              <option value="3" class="item3">Gran material estructural a la vista </option>
              <option value="4" class="item4">Material estructural completamente a la vista</option>
          </select>

          <br>

          <br>

          <label for="item15">GRIETAS Y FISURAS EN MAMPOSTERÍA</label>

          <br>


          <select id="item15" name="item15">
              <option value="1" class="item1">Sin grietas</option>
              <option value="2" class="item2">Micro fisuras </option>
              <option value="3" class="item3">Fisuras</option>
              <option value="4" class="item4">Grietas</option>
          </select>

          <br>

          <br>

          <label for="item16">SIMETRÍA EN PLANTA</label>

          <br>


          <select id="item16" name="item16">
              <option value="1" class="item1">Las formas de planta regulares, estructura tiene un plano
                  uniforme, sin elementos de torción</option>
              <option value="2" class="item2">Las forma de planta presentan irregularidades pequeñas
              </option>
              <option value="3" class="item3">Las formas en planta son irregulares aunque la estructura es
                  uniforme</option>
              <option value="4" class="item4">Formas de planta de la estructura de edificio (rigidéz,
                  masa, resistencia) con graves irregularidades. Estructura no uniforme</option>
          </select>

          <br>

          <br>

          <label for="item17">SIMETRÍA EN ALTURA</label>

          <br>


          <select id="item17" name="item17">
              <option value="1" class="item1">Sin elementos discontinuos o irregulares, la variación en
                  elevación del edificio es muy notoria</option>
              <option value="2" class="item2">Algunos elementos irregulares</option>
              <option value="3" class="item3">Muchos elementos discontinuos o irregulares sin mayor
                  importancia, cierta variación en la elevación de los edificios</option>
              <option value="4" class="item4">Elementos discontinuos o irregulares importantes, la
                  variación en elevación del edificio es muy notoria</option>
          </select>

          <br>

          <br>

          <label for="item18">IRREGULARIDAD EN ALTURA DE PISOS</label>

          <br>


          <select id="item18" name="item18">
              <option value="1" class="item1">Los pisos tiene altura semejante, con diferencia menor del
                  5% </option>
              <option value="2" class="item2">Los pisos tienen una altura semejante, la diferencia es
                  menor del 10% y mayor que el 5%</option>
              <option value="3" class="item3">Los pisos tienen alturas semejantes (la diferencia es menor
                  del 20% aunque mayor del 10%);</option>
              <option value="4" class="item4">La altura de los pisos difiere en más del 20%;</option>
          </select>

          <br>

          <br>

          <label for="item19">MATERIAL DE CONSTRUCCIÓN</label>

          <br>


          <select id="item19" name="item19">
              <option value="1" class="item1">Acero</option>
              <option value="2" class="item2">Piedra</option>
              <option value="2" class="item2">Hormigón</option>
              <option value="3" class="item3">Ladrillo</option>
              <option value="4" class="item4">Bloque</option>
          </select>

          <br>

          <br>

          <label for="item20">CONCENTRACIONES DE MASA EN TECHOS O CUBIERTAS</label>

          <br>


          <select id="item20" name="item20">
              <option value="1" class="item1">Antenas</option>
              <option value="2" class="item2">Tanques de agua</option>
              <option value="3" class="item3">Tanques de agua y antenas</option>
              <option value="4" class="item4">tanques de agua y antenas sin soporte</option>
          </select>

          <br>

          <br>

          <label for="item21">VIGAS ADECUADAS A LAS COLUMNAS</label>

          <br>


          <select id="item21" name="item21">
              <option value="1" class="item1">La resistencia de las columnas es mayor que la de las vigas
              </option>
              <option value="2" class="item2">La resistencia de las vigas es semejante a la de las
                  columnas</option>
              <option value="3" class="item3">La resistencia de las vigas es aoenas mayor que las columnas
              </option>
              <option value="4" class="item4">La resistencia de las vigas es obviamente mayor que la de
                  las columnas</option>
          </select>

          <br>

          <br>

          <label for="item22">VIGAS DE LA ESTRUCTURA LINEADAS CON LAS DEL EDIFICIO CONTIGUO</label>

          <br>


          <select id="item22" name="item22">
              <option value="1" class="item1">Vigas alineadas</option>
              <option value="2" class="item2">10% de vigas desalineadas</option>
              <option value="3" class="item3">10 a 20% vigas desalineadas</option>
              <option value="4" class="item4">Más del 20% de vigas desalineadas</option>
          </select>

          <br>

          <br>

          <label for="item23">ESPACIOS DE DILATACIÓN ENTRE EDIFICIOS CONTIGUOS</label>

          <br>


          <select id="item23" name="item23">
              <option value="1" class="item1">5 cm</option>
              <option value="2" class="item2">4 cm</option>
              <option value="3" class="item3">3 cm</option>
              <option value="4" class="item4">2 cm o menos </option>
          </select>

          <br>

          <br>

          <label for="item24">VOLADOS DEL EDIFICIO</label>

          <br>


          <select id="item24" name="item24">
              <option value="1" class="item1">Sin volados</option>
              <option value="2" class="item2">50 cm</option>
              <option value="3" class="item3">80 cm</option>
              <option value="4" class="item4">mas de 80 cm</option>
          </select>

          <br>

          <br>

          <label for="item25">ACELERACIÓN EN ROCA</label>

          <br>


          <select id="item25" name="item25">
              <option value="1" class="item1">035 - 038</option>
              <option value="2" class="item2">039-04</option>
              <option value="3" class="item3">04 - 045</option>
              <option value="4" class="item4">046 - 05</option>
          </select>

          <br>

          <br>
      </form>

  </div>
  <!-- /.container-fluid -->