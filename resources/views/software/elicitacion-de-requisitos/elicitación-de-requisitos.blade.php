@extends('../../layouts.sistemas')
@section('../../title', 'Elicitación de requisitos')

@section('navbar')
    @include('partials.navbar-elicitacion-de-requisitos')
@endsection

@section('content')
    <h1 class="h1-content" id="1. Elicitación de requisitos">1. Elicitación de requisitos</h1>
    <br>
    <p>
        El propósito de la elicitación de requerimientos es ganar conocimientos relevantes del problema, que se utilizarán para producir una especificación formal del software necesario para resolverlo.
    </p>
    <br>
    <p>
        <strong>"Un problema puede ser definido como la diferencia entre las cosas como se perciben y las cosas como se desean"</strong><br><br>
        -(Gause y Weinberg 1989)
    </p>
    <br>
    <p>
        Aquí se ve la importancia que tiene una buena comunicación entre desarrolladores y clientes; de esta comunicación con el cliente depende que sus necesidades queden claras. Además, al final de la fase de análisis de requerimientos, el analista podría llegar a tener un conocimiento extenso en el dominio del problema.
    </p>
    <br>
    <p>
        La elicitación de requisitos es la actividad que se considera como el primer paso en un proceso de ingeniería de requisitos; su significado hace referencia a la puesta en marcha de técnicas que sirven para recopilar conocimiento o información y los objetivos de esta fase de elicitación, son:
    </p>
    <br>
    <ul>
        <li>
            Conocer el dominio del problema para poder comunicarse con clientes y usuarios y entender sus necesidades.
        </li><br>

        <li>
            Conocer el sistema actual (manual o informatizado) y sus aspectos positivos y negativos.
        </li><br>

        <li>
            Identificar las necesidades, tanto explícitas como implícitas, de clientes y usuarios y sus expectativas sobre el sistema a desarrollar.
        </li><br>
    </ul>
    <br>
    <h2 class="h2-content" id="1.1. Planeación">1.1. Planeación</h2>
    <br>
    <p>
        La planeación busca definir las tareas a realizar para elegir y planificar las técnicas a emplear durante la actividad de elicitación de la fase de ingeniería de requisitos del desarrollo de software. En la siguiente tabla se presenta una relación de estas tareas y sus correspondientes procesos.
    </p>
    <br>
    <img class="img-1" src="/images/elicitacion-de-requisitos/Captura.png" alt="Tareas para elicitación de requisitos.">
    <br><br>
    <p>
        A continuación, se describen los procesos relacionados con las tareas para elicitación de requisitos:
    </p>
    <br>
    <h2 class="h2-content" id="A. Identificar las fuentes de requerimientos.">A. Identificar las fuentes de requerimientos.</h2>
    <br>
    <p>
        Existe un conjunto de fuentes de requisitos en cada proyecto de desarrollo de software, así, usuarios y expertos abastecen de información detallada acerca del problema y necesidades del usuario. Los procesos y sistemas existentes representan, también, fuentes de requisitos; además, la documentación existente como manuales, formularios y reportes, incluso especificaciones de requisitos anteriores, puede proveer información útil acerca de la organización y su entorno.
    </p>
    <br>
    <p>
        En el proceso de esta actividad se identifican:
    </p>
    <br>
    <ul>
        <li>
            Interesados relevantes.
        </li><br>

        <li>
            Documentación que se puede usar como fuente de información de los requerimientos.
        </li><br>

        <li>
            Fuentes de información externas.
        </li><br>
    </ul>
    <br>
    <p>
        Las fuentes de requerimientos incluyen los propietarios del problema, los stakeholders, documentos y otros sistemas (Pearson, 2002). En ese sentido, los requerimientos pueden obtenerse en diversas fuentes que pueden clasificarse en gente (people), productos o documentos, pero cualquiera sea la fuente de esos requerimientos deben ser chequeados con los stakeholders.
    </p>
    <br>
    <p>
        Estas fuentes de requerimientos, se pueden clasificar en:
    </p>
    <br>
    <p>
        <strong>Fuentes primarias:</strong> Aportan material de primera mano (es protagonista o testigo de los hechos), estas fuentes contienen información original, que ha sido publicada por primera vez y que no ha sido filtrada, interpretada o evaluada por nadie más.
    </p>
    <br>
    <p>
        <strong>Fuentes secundarias:</strong> Toman y reproducen la información que le aportó una fuente primaria. Son las que contienen información primaria, sintetizada y reorganizada y están especialmente diseñadas para facilitar y maximizar el acceso a las fuentes primarias o a sus contenidos. Parten de datos preelaborados, como pueden ser datos obtenidos de anuarios estadísticos, internet, medios de comunicación, bases de datos procesadas con otros fines, artículos y documentos relacionados con un tema, libros, tesis, informes oficiales, etc.
    </p>
    <br>
    <p>
        <strong>Fuentes terciarias:</strong> Son guías físicas o virtuales que contienen información sobre las fuentes secundarias. Forman parte de la colección de referencia de una biblioteca; facilitan el control y acceso a toda la gama de repertorios de referencia, como las guías de obras de referencia, o a un solo tipo, como las bibliografías.
    </p>
    <br>
    <p>
        Son guías físicas o virtuales que contienen información sobre las fuentes secundarias. Forman parte de la colección de referencia de una biblioteca; facilitan el control y acceso a toda la gama de repertorios de referencia, como las guías de obras de referencia, o a un solo tipo, como las bibliografías.
    </p>
    <br>
    <p>
        Por otra parte, las fuentes de información, pueden ser orales, escritas o de otro tipo, dependiendo de cómo se transmitan los datos. A continuación, se pueden revisar algunos ejemplos de fuentes de información.
    </p>
    <br>
    <img class="img-1" src="/images/elicitacion-de-requisitos/fuentes de informacion.png" alt="Fuentes de informacion .">
    <br><br>
    <h2 class="h2-content" id="B. Identificar interesados del producto.">B. Identificar interesados del producto.</h2>
    <br>
    <p>
        Uno de los primeros pasos en el proceso es el análisis e identificación de todas las personas relevantes que tienen un grado de interés en el proyecto. <strong>Los interesados (stakeholders), son los individuos y organizaciones que están relacionados activamente en un proyecto de software</strong>; tienen influencia directa o indirecta sobre los requisitos, o sus intereses se ven afectados por el proyecto (Baar, 2006, Ventura, 2002).
    </p>
    <br>
    <p>
        En resumen, son grupos o individuos que están interesados en el producto de software que se está desarrollando y necesitarán estar informados acerca del progreso, conflictos, cambios y prioridades del proceso de desarrollo del producto.
    </p>
    <br>
    <p>
        Los stakeholders se dividen en dos grupos:
    </p>
    <br>
    <p>
        <strong>Primarios:</strong> Son aquellas personas indispensables para el correcto funcionamiento de la organización, y tienen una relación económica directa con la empresa. Estos pueden ser sus socios, clientes y accionistas.
    </p>
    <br>
    <p>
        <strong>Secundarios:</strong> Son los entes que no participan directamente de la compañía, pero también son afectados por sus resultados. En este círculo se encuentran los competidores, el mercado y las personas en general.
    </p>
    <br>
    <p>
        A continuación, se listan roles más generales de las personas involucradas con sus términos similares, aunque cabe resaltar que existen leves diferencias entre ellos (Sommerville y Sawyer, 2005).
    </p>
    <br>
    <ul>
        <li>
            Líder de proyecto / Administrador de proyecto / Gerente de proyecto.
        </li><br>

        <li>
            Analista / Ingeniero de requisitos.
        </li><br>

        <li>
            Ingeniero de sistemas / Arquitecto.
        </li><br>

        <li>
            Programador / Desarrollador / Ingeniero de software.
        </li><br>

        <li>
            Probador / Asegurador de la calidad.
        </li><br>

        <li>
            Administrador de bases de datos.
        </li><br>
    </ul>
    <br>
    <p>
        En la siguiente tabla se presentan los principales roles involucrados en el proceso de ingeniería de requisitos, así como las actividades en las que tienen mayor participación.
    </p>
    <br>
    <img class="img-2" src="/images/elicitacion-de-requisitos/Captura de pantalla (5).png" alt="Roles involucrados en la ingeniería de requisitos.">
    <br><br>
    <p>
        Algunas de las técnicas que se pueden emplear para llevar a cabo la labor de análisis de los stakeholders incluyen entrevistas con los expertos, lluvia de ideas en grupo y lista de chequeo. Se espera que este grupo de personas identifiquen y caractericen a los stakeholders objetivamente, por tal motivo es recomendable involucrar a personas de diferentes contextos (Karisen, 2002 citado en Wessinger, 2012).
    </p>
    <br>
    <h2 class="h2-content" id="C. Matriz de stakeholders.">C. Matriz de stakeholders.</h2>
    <br>
    <p>
        La utilización de esta <strong>herramienta de análisis permite clasificar a los involucrados en el proyecto según sus niveles de interés y poder sobre él</strong>, lo que facilita la priorización de los stakeholders más importantes para desarrollar las estrategias de gestión correspondientes.
    </p>
    <br>
    <p>
        <strong>Importancia de la matriz de stakeholders en los proyectos de desarrollo.</strong>
    </p>
    <br>
    <p>
        En los proyectos de desarrollo, la gestión de los stakeholders es de suma importancia para alcanzar el éxito de los proyectos, ya que el proceso de identificación de los involucrados y la definición de sus niveles de interés e influencia en el proyecto, marcarán el punto de partida para desarrollar estrategias que posibilitan obtener el apoyo requerido para alcanzar los objetivos por los que el proyecto es emprendido. Es por ello, que la matriz de stakeholders es una herramienta indispensable desde el comienzo del proyecto mismo, ya que proveerá de la información necesaria para gestionar, adecuadamente, las expectativas de los involucrados a lo largo del proyecto, maximizando las influencias positivas y mitigando los impactos negativos potenciales derivados de estos. Además, dado el carácter social de los proyectos de desarrollo, involucrar a la sociedad civil no debe ser solo un ejercicio de comunicación unidireccional sino una oportunidad para lograr su apoyo al proyecto.
    </p>
    <br>
    <p>
        <strong>Proceso de armado de la matriz de stakeholders.</strong>
    </p>
    <br>
    <p>
        Para desarrollar la matriz de stakeholders es necesario identificar las entradas necesarias que proveerán la información con la que el líder y el equipo de proyecto trabajarán para desarrollar la matriz misma. Tales entradas pueden ser el acta de constitución de proyecto, documentos de adquisición, activos de los procesos y factores ambientales de la organización.
    </p>
    <br>
    <img class="img-2" src="/images/elicitacion-de-requisitos/Entradas, herramientas y técnicas, salidas..png" alt="Entradas, herramientas y técnicas, salidas.">
    <br><br>
    <p>
        <strong><a href="https://todopmp.com/cards/"><strong>Anexo:</strong> Para profundizar en detalle, se invita a consultar la Guía PMBOK 6-49 procesos, entradas, herramientas y salidas, como material complementario.</a></strong>
    </p>
    <br>
    <p>
        <strong>Descripción de los componentes de la matriz de stakeholders.</strong>
    </p>
    <p>
        <strong>Stakeholder:</strong> Es el nombre con el que se identifica al stakeholder.
    </p>
    <br>
    <p>
        <strong>Tipo:</strong> Identifica si el stakeholder desempeña un rol interno o externo al proyecto mismo. Los stakeholders pueden ser internos, como el personal de las unidades ejecutoras, el personal administrativo o ejecutivo de la organización, el personal de las entidades financiadoras con alto nivel de poder e influencia en el proyecto y sus recursos; o externos como los beneficiarios del proyecto, las instituciones del sector o las organizaciones de la sociedad civil, quienes serán de un modo u otro impactados por los resultados del proyecto.
    </p>
    <br>
    <p>
        <strong>Objetivo o resultados:</strong> En este campo se enlistan los objetivos o resultados en los que el stakeholder muestra interés o en aquellos en los que puede influir positiva o negativamente con sus acciones. Esta información puede ser suministrada por el acta de constitución de proyectos, la estructura de la organización, la estructura de desglose de trabajo, los diferentes planes que conforman el proyecto, entrevistas a los mismos interesados, etc
    </p>
    <br>
    <p>
        <strong>Acciones posibles con impacto positivo / negativo:</strong> Son las acciones que puede emprender el stakeholder y que pueden influir, negativa o positivamente, en los objetivos del proyecto en los que muestra su interés o en aquellos en los que puede influir debido a su jerarquía, estatus, recursos de los que dispone, entre otros.
    </p>
    <br>
    <p>
        <strong>Estrategias:</strong> Es un listado de acciones que se pueden emprender para obtener el apoyo necesario o evitar obstáculos por parte de los stakeholders durante la ejecución y conclusión del proyecto. Las estrategias se desarrollan considerando el tipo de stakeholder, los objetivos en los que está interesado, el nivel de interés y poder que puede ejercer en el proyecto (figura 1) y las acciones posibles que podría emprender para afectar tanto positiva como negativamente al proyecto.
    </p>
    <br>
    <p>
        <strong>Conclusiones:</strong> Es la síntesis sobre puntos clave a considerar para gestionar de manera efectiva las expectativas de los stakeholders. Las conclusiones se obtienen de relacionar, analizar y sintetizar toda la información vertida en la matriz de stakeholders.
    </p>
    <br>
    <p>
        <strong>Categorización de stakeholders y estrategias de gestión de las expectativas.</strong>
    </p>
    <br>
    <p>
        Como ya se había mencionado anteriormente, la matriz de stakholders es una herramienta muy útil que permite clasificar a los involucrados en el proyecto según sus niveles de interés e influencia, priorizando a los más importantes y desarrollando así las estrategias correspondientes para gestionar sus expectativas. De la misma manera, su clasificación puede cambiar durante la vida del proyecto. Así, aquellos que fueron inicialmente identificados con un alto nivel de influencia en el proyecto, pueden ser reclasificados a un nivel más bajo durante otras etapas de la vida del proyecto.
    </p>
    <br>
    <p>
        La categorización de los stakeholders se lleva a cabo una vez que la información sobre éstos esté completa. Para ello se puede utilizar una matriz de 2x2 en la que se pueda graficar el grado de poder e interés que tiene el involucrado en el proyecto, coadyuvando así a clasificar a cada stakeholder dentro del grupo para el cual se definen diferentes estrategias (figura 2).
    </p>
    <br>
    <img class="img-2" src="/images/elicitacion-de-requisitos/Ejemplo de matriz interés vs. influencia..png" alt="Ejemplo de matriz interés vs. influencia.">
    <br><br>
    <h2 class="h2-content" id="1.2 Técnicas e instrumentos para elicitar requisitos">1.2 Técnicas e instrumentos para elicitar requisitos</h2>
    <br>
    <p>
        Hay una variedad de técnicas propuestas para ingeniería de requerimientos (Herrera, 2003. p. 12), por lo que es primordial resaltar que estas técnicas pueden ser aplicables a las distintas fases del proceso de la ingeniería de requerimientos (IR), teniendo en cuenta las características propias del proyecto en particular que se esté desarrollándose para aprovechar al máximo su utilidad.
    </p>
    <br>
    <p>
        A continuación, se presentará una serie de técnicas destinadas a facilitar la elicitación correcta y efectiva de los requisitos dentro de un proceso de desarrollo.
    </p>
    <br>
    <h2 class="h2-content" id="1.2.1. Entrevista.">1.2.1. Entrevista.</h2>
    <br>
    <p>
        <strong>"La entrevista es una forma de recoger información de otra persona a través de una comunicación interpersonal que se lleva a cabo por medio de una conversación estructurada."</strong>
    </p>
    <br>
    <p>
        - (Braude, 2003)
    </p>
    <br>
    <p>
        En las entrevistas se pueden identificar tres fases: preparación, realización y análisis (Piattini et al. 1996), como se puede observar en el siguiente gráfico.
    </p>
    <br>
    <p>
        <strong>1. Preparación</strong>
    </p>
    <br>
    <p>
        El entrevistador debe documentarse e investigar la situación de la organización, analizando los documentos de la empresa disponible.
    </p>
    <br>
    <ul>
        <li>
            Se debe intentar minimizar el número de entrevistados, considerando las entrevistas de cortesía.
        </li><br>

        <li>
            Analizar el perfil de los entrevistados.
        </li><br>

        <li>
            Definir el objetivo y el contenido de la entrevista.
        </li><br>

        <li>
            Planificar el lugar y la hora en la que se va a desarrollar la entrevista (es conveniente realizarla en un lugar confortable).
        </li><br>

        <li>
            Algunos proponen enviar previamente el entrevistado un cuestionario y un pequeño documento de introducción al proyecto de desarrollo.
        </li><br>
    </ul>
    <br>
    <img class="img-1" src="/images/elicitacion-de-requisitos/Preparación.png" alt="Preparación">
    <br><br>
    <p>
        <strong>2. Realización</strong>
    </p>
    <br>
    <p>
        Dentro de la realización de las entrevistas se distinguen tres etapas, tal como se expone en Piattini et al. (1996):
    </p>
    <br>
    <p>
        <strong>a. Apertura:</strong> presentarse e informar al entrevistado sobre la razón de la entrevista.
    </p>
    <br>
    <p>
        <strong>b. Desarrollo:</strong> cumplir las reglas del protocolo, hay que llegar a un acuerdo sobre cómo se va a registrar la información obtenida.
    </p>
    <br>
    <p>
        Durante esta fase se pueden emplear distintas técnicas:
    </p>
    <br>
    <img class="img-1" src="/images/elicitacion-de-requisitos/Realización.png" alt="Realización">
    <br><br>
    <p>
        <strong>Preguntas abiertas:</strong> también denominadas de libre contexto (Gause y Weinberg, 1989), estas preguntas no pueden responderse con un <strong>"sí"</strong> o un <strong>"no"</strong>, permiten una mayor comunicación y evitan la sensación de interrogatorio. Por ejemplo, <strong>"¿Qué se hace para registrar un pedido?", "Dígame qué se debe hacer cuando un cliente pide una factura" o “¿Cómo se rellena un recibo?"</strong>
    </p>
    <br>
    <p>
        <strong>Utilizar palabras apropiadas:</strong> se deben evitar tecnicismos que no conozca el entrevistado y palabras o frases que puedan perturbar emocionalmente la comunicación (Goleman 1996, Goleman 1999).
    </p>
    <br>
    <p>
        <strong>Mostrar interés en todo momento:</strong> es fundamental cuidar la comunicación no verbal (Davis, 1985) durante la entrevista: tono de voz, movimiento, expresión facial.
    </p>
    <br>
    <p>
        <strong>c.Terminación:</strong> se termina recapitulando la entrevista agradeciendo el esfuerzo y dejando abierta la posibilidad de volver a contactar para aclarar conceptos o bien citándole para otra entrevista.
    </p>
    <br>
    <p>
        <strong>3. Análisis</strong>
    </p>
    <br>
    <p>
        Consiste en leer las notas, pasarlas en limpio, reorganizar la información, contrastarlas con otras entrevistas o fuentes de información, evaluar cómo ha ido la entrevista.
    </p>
    <br>
    <p>
        En estas entrevistas, el equipo de la ingeniería de requerimientos hace preguntas sobre el sistema que utilizan y sobre el sistema a desarrollar. Los requerimientos provienen de las respuestas a estas preguntas.
    </p>
    <br>
    <img class="img-1" src="/images/elicitacion-de-requisitos/Análisis.png" alt="Análisis">
    <br><br>
    <p>
        Las entrevistas se pueden clasificar fundamentalmente, en:
    </p>
    <br>
    <h2 class="h2-content" id="Entrevista estructurada">Entrevista estructurada</h2>
    <br>
    <p>
        Las preguntas en esta entrevista se deciden, previamente, de acuerdo con el detalle de información requerida.
    </p>
    <br>
    <ul>
        <li>
            Recoge de forma sistemática y precisa la mayor información sobre los aspectos que quiere explorar.
        </li><br>

        <li>
            Las preguntas son prefijadas y definidas, las respuestas son esperadas e incluso se le dan al entrevistado en forma de varias opciones.
        </li><br>

        <li>
            Las etapas son planificadas.
        </li><br>

        <li>
            La interpretación de las respuestas se realiza de acuerdo con unos criterios establecidos.
        </li><br>
    </ul>
    <br>
    <a href="https://sena.territorio.la/content/index.php/institucion/Titulada/institution/SENA/Tecnologia/228118/Contenido/OVA/CF3//downloads/Anexo1.pdf">Anexo: Entrevista estructurada</a>
    <br><br>
    <h2 class="h2-content" id="Entrevista semiestructurada">Entrevista semiestructurada</h2>
    <br>
    <p>
        Esta presenta un grado mayor de flexibilidad que la estructurada, debido a que parten de preguntas planeadas, que pueden ajustarse a los entrevistados. Su ventaja es la posibilidad de adaptarse a los sujetos con enormes posibilidades para motivar al interlocutor, aclarar términos, identificar ambigüedades y reducir formalismos.
    </p>
    <br>
    <p>
        Las preguntas, desarrollo e interpretación se planifican previamente, pero con un cierto grado de libertad de acción para abordar temas que pueden surgir durante la misma.
    </p>
    <br>
    <p>
        Se suele utilizar un protocolo para facilitar al entrevistador seguir un modelo preestablecido.
    </p>
    <br>
    <h2 class="h2-content" id="Entrevista no estructurada">Entrevista no estructurada</h2>
    <br>
    <p>
        Las entrevistas no estructuradas suelen describirse como conversaciones mantenidas con un propósito en mente.
    </p>
    <br>
    <p>
        No se estructura ni planifica previamente.
    </p>
    <br>
    <p>
        Es la más ágil y la que proporciona más información en general, pero requiere un cierto dominio por parte del entrevistador.
    </p>
    <br>
    <p>
        En el material complementario se pueden revisar ejemplo de entrevistas
    </p>
    <br>
    <h2 class="h2-content" id="1.2.2. Encuesta.">1.2.2. Encuesta.</h2>
    <br>
    <p>
        <strong>"Los cuestionarios son herramientas ampliamente utilizadas para recoger datos de sondeos y pueden ser administradas sin la presencia del investigador"</strong>
    </p>
    <br>
    <p>
        - (Cohen, 2011, p. 377).
    </p>
    <br>
    <p>
        Pueden variar en cuanto a propósito, diseño y apariencia, y consisten en listas de preguntas escritas. Los individuos participantes en la investigación suelen leer los mismos listados de preguntas, por lo que esto permite consistencia y precisión al analizar las respuestas, además de facilitar el proceso. Una de las ventajas más destacadas de los cuestionarios es que simplifican el proceso de la obtención de datos, preguntando directamente a los individuos participantes para obtener datos de forma rápida y directa y se pueden aplicar a un gran número de sujetos.
    </p>
    <br>
    <p>
        Los datos que se obtienen a través de los cuestionarios suelen estar clasificados en dos categorías: hechos y opiniones (Denscombe, 2010, p. 156). La información relacionada con los hechos no requiere el juicio o la actitud personal de los sujetos participantes, pero la información obtenida a través de las opiniones implica creencias, puntos de vista y preferencias de los sujetos participantes.
    </p>
    <br>
    <img class="img-2" src="/images/elicitacion-de-requisitos/preguntas.svg" alt="Tipos de preguntas">
    <br>
    <p style="text-align: center">
        <strong>Tipos de preguntas</strong>
    </p>
    <br>
    <p>
        La distinción más general entre los tipos de preguntas de los <strong>cuestionarios, además de hechos y opiniones, es la de preguntas abiertas y cerradas</strong>; las preguntas abiertas son aquellas en las que no se especifica ninguna respuesta para elegir y se deja abierta a la elección del participante para que escriba en ella. Las preguntas cerradas son las que ofrecen ya unas respuestas predeterminadas para su elección.
    </p>
    <br>
    <img class="img-2" src="/images/elicitacion-de-requisitos/respuestas.svg" alt="Tipos de respuestas">
    <br>
    <p style="text-align: center">
        <strong>Tipos de respuestas</strong>
    </p>
    <br>
    <p>
        Las respuestas de escala son las más comunes en los cuestionarios de investigación ya que implican al participante en una valoración o evaluación de las respuestas objetivo por medio de varias opciones en las que tienen que marcar dentro de una escala la importancia de cada una. Esa escala de valoración indica diferentes grados en una categoría y puede ser de diversa naturaleza; por ejemplo, puede valorar una categoría indicando si es <strong>“bueno”</strong> o <strong>“malo”</strong>, <strong>“frecuente”</strong> o <strong>“infrecuente”</strong>, <strong>“importante”</strong> o <strong>“poco importante”</strong> o también pueden valorar opiniones: <strong>“completamente de acuerdo”</strong> o “en desacuerdo”. El número de opciones más común es el de cinco, por ser un número impar, ya que existe una tendencia generalizada a seleccionar la opción intermedia (Dornyei, 2010).
    </p>
    <br>
    <a href="https://www.youtube.com/watch?v=mwnQuUi9014">Anexo: Tipos de preguntas</a>
    <br>
    <br>
    <h2 class="h2-content" id="1.2.3. Observación.">1.2.3. Observación.</h2>
    <br>
    <p>
        Esta permite la obtención de datos para emprender una investigación de tipo cualitativo, no desde el punto de vista de lo que los sujetos dicen, sino que es la evidencia directa de lo que ve y percibe el investigador en un escenario de primera mano (Denscombe, 2010).
    </p>
    <br>
    <p>
        Por su parte, Selltiz (citado por Hernández, Fernández y Baptista, 2006, p. 229), al referirse a la observación, recomienda que para que esta se convierta en una técnica como tal, debe cumplir con cuatro condiciones:
    </p>
    <br>
    <ul>
        <li>
            <strong>1.</strong> Debe servir a un objeto formulado de investigación.
        </li><br>

        <li>
            <strong>2.</strong> Debe de ser planificada sistemáticamente.
        </li><br>

        <li>
            <strong>3.</strong> Debe estar controlada y relacionada con proposiciones generales.
        </li><br>

        <li>
            <strong>4.</strong> Debe ser sujeta a comprobaciones y controles de validez y fiabilidad.
        </li><br>

    </ul>
    <br>
    <p>
        De acuerdo con lo anterior, se puede asumir que la observación:
    </p>
    <br>
    <p>
        Tiene la característica de seguir normas, reglas y procedimientos.
    </p>
    <br>
    <p>
        Permite a los sujetos y objetos establecer relaciones de manera directa.
    </p>
    <br>
    <p>
        Para el caso de obtención de requerimientos del software la observación nos sirve para estudiar el entorno de trabajo de los usuarios, clientes e interesados de proyecto (stakeholders) y para documentar la situación actual de procesos de negocio.
    </p>
    <br>
    <p>
        En la siguiente figura, se pueden revisar los tipos de observación.
    </p>
    <br>
    <img class="img-2" src="/images/elicitacion-de-requisitos/Tipos de observación..png" alt="Tipos de observación.">
    <br><br>
    <p>
        Ahora bien, para llevar a cabo la observación, el observador puede utilizar como instrumento <strong>la guía de observación</strong>, la cual le permite situarse de manera sistemática en aquello que realmente es objeto de estudio para la investigación; también es el medio que conduce la recolección y obtención de datos e información de un hecho o fenómeno.
    </p>
    <br>
    <p>
        <strong>Tamayo (2004) define a la guía de observación como:</strong>
    </p>
    <br>
    <p>
        Un formato en el cual se pueden recolectar los datos en sistemática y se pueden registrar en forma uniforme, su utilidad consiste en ofrecer una revisión clara y objetiva de los hechos, agrupa los datos según necesidades específicas, se hace respondiendo a la estructura de las variables o elementos del problema (p. 172).
    </p>
    <br>
    <p>
        Para elaborar la guía de observación se ha de diseñar el contenido de la observación; el cual debe incluir por lo menos los siguientes aspectos:
    </p>
    <br>
    <ul>
        <li>
            <strong>1.</strong> Datos y características de los sujetos a evaluar.
        </li><br>

        <li>
            <strong>2.</strong> Propósitos de la observación o de las observaciones a realizar.
        </li><br>

        <li>
            <strong>3.</strong> Temporalidad de la observación.
        </li><br>
    </ul>
    <br>
    <a href="https://sena.territorio.la/content/index.php/institucion/Titulada/institution/SENA/Tecnologia/228118/Contenido/OVA/CF3//downloads/Anexo2.pdf">Anexo: Ficha de observación.</a>
    <br>
    <h2 class="h2.content" id="1.2.4. Sesiones grupales.">1.2.4. Sesiones grupales.</h2>
    <br>
    <p>
        Es un proceso por el cual se llevan a cabo reuniones en grupo altamente estructuradas que convocan, en una misma sala, a los usuarios de un sistema, los propietarios del sistema y a los analistas durante un amplio periodo de tiempo. Los objetivos de esta técnica son esencialmente los mismos que los de las entrevistas, con la salvedad de necesitar más analistas para llevarlos a cabo.
    </p>
    <br>
    <p>
        Dentro de las sesiones de trabajo en grupo se encuentran técnicas como la <strong>lluvia de ideas, las sesiones JAD y el método Delphi</strong>.
    </p>
    <br>
    <h2 class="h2-content" id="Lluvia de ideas">
        Lluvia de ideas
    </h2>
    <br>
    <p>
        También denominada tormenta de ideas o incluso brainstorming. Faickney (1939) investigó sobre diferentes maneras de generar creatividad. Se percató de que la mejor manera de ser creativo en una empresa es a través de la interacción y el trabajo en equipo; todos juntos podían dar sus opiniones y sugerencias sobre un tema determinado. Creó de esta manera la lluvia de ideas.
    </p>
    <br>
    <h2 class="h2-content" id="Sesiones JAD (Joint Application Design)">Sesiones JAD (Joint Application Design)</h2>
    <br>
    <p>
        Es un proceso usado para reunir requerimientos en el desarrollo de nuevos sistemas de información para una compañía. <strong>El proceso JAD consiste en un taller donde los trabajadores del conocimiento y los especialistas en tecnologías de información se reúnen</strong>, algunas veces durante varios días, para definir y revisar los requerimientos de negocio para el sistema. Los asistentes incluyen oficiales de administración de alto nivel, quienes se aseguran de que el producto provea los reportes y la información requerida al final, esto actúa como <strong>“un proceso de administración”</strong> que permite que los departamentos de servicios de información corporativa trabajen más eficientemente con los usuarios en un marco de tiempo más reducido.
    </p>
    <br>
    <p>
        A través de los talleres JAD, los trabajadores del conocimiento y los especialistas en tecnologías de información pueden resolver cualquier dificultad o diferencias entre las posturas referentes al nuevo sistema de información. <strong>El taller sigue una detallada agenda para lograr garantizar que todas las incertidumbres entre los grupos sean cubiertas y para ayudar a prevenir cualquier falla en la comunicación</strong>, estas fallas de comunicación pueden provocar repercusiones mucho más serias si no se identifican a tiempo. Al final, este proceso resultará en un nuevo Sistema de Información viable y orientado tanto a diseñadores como a usuarios.
    </p>
    <br>
    <h2 class="h2-content" id="Método Delphi">Método Delphi</h2>
    <br>
    <p>
        Es un <strong>método de estructuración de un proceso de comunicación grupal</strong> que consiste en la selección de un grupo de expertos a los que se les pregunta su opinión frente a ciertas temáticas.
    </p>
    <br>
    <p>
        <strong>Fase uno:</strong> Formulación del problema: se define el campo de investigación.
    </p>
    <br>
    <p>
        <strong>Fase dos:</strong> Elección de expertos: el experto se elige según su preparación y su capacidad de proyección.
    </p>
    <br>
    <p>
        <strong>Fase tres:</strong> Elaboración de cuestionarios: las preguntas deben hacerse de acuerdo con la temática que se quiere obtener.
    </p>
    <br>
    <p>
        <strong>Fase cuatro:</strong> Desarrollo y explotación de resultados: el cuestionario se entrega a los expertos para ser contestado por ellos.
    </p>
    <br>
    <h2 class="h2-content" id="1.3. Herramientas para captura de requisitos">1.3. Herramientas para captura de requisitos</h2>
    <br>
    <p>
        Existen varias herramientas para la captura de requisitos potenciales de un nuevo sistema o una actualización de software, a continuación, se explican las más utilizadas:
    </p>
    <br>
    <h2 class="h2-content" id="1.3.1. Diagrama de casos de uso.">1.3.1. Diagrama de casos de uso.</h2>
    <br>
    <p>
        Al momento de desarrollar un proyecto se debe pensar en cuáles serán las principales funcionalidades que el software debe permitir llevar a cabo y quiénes serán los que podrán ejecutar dichas funcionalidades. <strong>La identificación de estos elementos se puede visualizar de manera efectiva a través de la elaboración de diagramas de casos de uso</strong>; estos diagramas, que son elaborados durante las etapas iniciales de un proyecto, se convierten en referente para cada una de las etapas siguientes del desarrollo del proyecto
    </p>
    <br>
    <p>
        Componentes. En los diagramas de casos de uso, se observan los siguientes componentes.
    </p>
    @endsection

    @section('sidebar')
    <h1 class="h1-sidebar">En este articulo</h1>
    <a href="#1. Elicitación de requisitos">1. Elicitación de requisitos</a><br><br>
    <a href="#1.1. Planeación">1.1. Planeación</a><br><br>
    <a href="#A. Identificar las fuentes de requerimientos.">A. Identificar las fuentes de requerimientos.</a><br><br>
    <a href="#B. Identificar interesados del producto.">B. Identificar interesados del producto.</a><br><br>
    <a href="#C. Matriz de stakeholders.">C. Matriz de stakeholders.</a><br><br>
    <a href="#1.2 Técnicas e instrumentos para elicitar requisitos">1.2 Técnicas e instrumentos para elicitar requisitos</a><br><br>
    <a href="#1.2.1. Entrevista.">1.2.1. Entrevista.</a><br><br>
    <a href="#Entrevista estructurada">Entrevista estructurada</a><br><br>
    <a href="#Entrevista semiestructurada">Entrevista semiestructurada</a><br><br>
    <a href="#Entrevista no estructurada">Entrevista no estructurada</a><br><br>
    <a href="#1.2.2. Encuesta.">1.2.2. Encuesta.</a><br><br>
    <a href="#1.2.3. Observación.">1.2.3. Observación.</a><br><br>
    <a href="#1.2.4. Sesiones grupales.">1.2.4. Sesiones grupales.</a><br><br>
    <a href="#Lluvia de ideas">Lluvia de ideas</a><br><br>
    <a href="#Sesiones JAD (Joint Application Design)">Sesiones JAD (Joint Application Design)</a><br><br>
    <a href="#Método Delphi">Método Delphi</a><br><br>
    <a href="#1.3. Herramientas para captura de requisitos">1.3. Herramientas para captura de requisitos</a><br><br>
    @endsection

