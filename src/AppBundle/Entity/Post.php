<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Post
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Post
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    // /**
    //  * @var array
    //  *
    //  * @ORM\Column(name="arreglo", type="array")
    //  */
    // private $arreglo;

    // /**
    //  * @var array
    //  *
    //  * @ORM\Column(name="simple_arreglo", type="simple_array")
    //  */
    // private $simpleArreglo;

    // /**
    //  * @var array
    //  *
    //  * @ORM\Column(name="json_arreglo", type="json_array")
    //  */
    // private $jsonArreglo;

    // /**
    //  * @var \stdClass
    //  *
    //  * @ORM\Column(name="objeto", type="object")
    //  */
    // private $objeto;

    /**
     * @var boolean
     *
     * @ORM\Column(name="booleano", type="boolean")
     */
    private $booleano;

    /**
     * @var integer
     *
     * @ORM\Column(name="entero", type="integer")
     */
    private $entero;

    /**
     * @var integer
     *
     * @ORM\Column(name="small_entero", type="smallint")
     */
    private $smallEntero;

    /**
     * @var integer
     *
     * @ORM\Column(name="big_entero", type="bigint")
     */
    private $bigEntero;

    /**
     * @var string
     *
     * @ORM\Column(name="cadena", type="string", length=255)
     */
    private $cadena;

    /**
     * @var string
     *
     * @ORM\Column(name="texto", type="text")
     */
    private $texto;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechatiempo", type="datetime")
     */
    private $fechatiempo;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dechatiempoz", type="datetimetz")
     */
    private $dechatiempoz;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha", type="date")
     */
    private $fecha;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="tiempo", type="time")
     */
    private $tiempo;

    /**
     * @var string
     *
     * @ORM\Column(name="numerodecimal", type="decimal")
     */
    private $numerodecimal;

    /**
     * @var float
     *
     * @ORM\Column(name="numeroconcoma", type="float")
     */
    private $numeroconcoma;

    // /**
    //  * @var string
    //  *
    //  * @ORM\Column(name="gota_blob", type="blob")
    //  */
    // private $gotaBlob;

    // /**
    //  * @var guid
    //  *
    //  * @ORM\Column(name="guid_guid", type="guid")
    //  */
    // private $guidGuid;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set arreglo
     *
     * @param array $arreglo
     * @return Post
     */
    public function setArreglo($arreglo)
    {
        $this->arreglo = $arreglo;

        return $this;
    }

    /**
     * Get arreglo
     *
     * @return array 
     */
    public function getArreglo()
    {
        return $this->arreglo;
    }

    /**
     * Set simpleArreglo
     *
     * @param array $simpleArreglo
     * @return Post
     */
    public function setSimpleArreglo($simpleArreglo)
    {
        $this->simpleArreglo = $simpleArreglo;

        return $this;
    }

    /**
     * Get simpleArreglo
     *
     * @return array 
     */
    public function getSimpleArreglo()
    {
        return $this->simpleArreglo;
    }

    /**
     * Set jsonArreglo
     *
     * @param array $jsonArreglo
     * @return Post
     */
    public function setJsonArreglo($jsonArreglo)
    {
        $this->jsonArreglo = $jsonArreglo;

        return $this;
    }

    /**
     * Get jsonArreglo
     *
     * @return array 
     */
    public function getJsonArreglo()
    {
        return $this->jsonArreglo;
    }

    /**
     * Set objeto
     *
     * @param \stdClass $objeto
     * @return Post
     */
    public function setObjeto($objeto)
    {
        $this->objeto = $objeto;

        return $this;
    }

    /**
     * Get objeto
     *
     * @return \stdClass 
     */
    public function getObjeto()
    {
        return $this->objeto;
    }

    /**
     * Set booleano
     *
     * @param boolean $booleano
     * @return Post
     */
    public function setBooleano($booleano)
    {
        $this->booleano = $booleano;

        return $this;
    }

    /**
     * Get booleano
     *
     * @return boolean 
     */
    public function getBooleano()
    {
        return $this->booleano;
    }

    /**
     * Set entero
     *
     * @param integer $entero
     * @return Post
     */
    public function setEntero($entero)
    {
        $this->entero = $entero;

        return $this;
    }

    /**
     * Get entero
     *
     * @return integer 
     */
    public function getEntero()
    {
        return $this->entero;
    }

    /**
     * Set smallEntero
     *
     * @param integer $smallEntero
     * @return Post
     */
    public function setSmallEntero($smallEntero)
    {
        $this->smallEntero = $smallEntero;

        return $this;
    }

    /**
     * Get smallEntero
     *
     * @return integer 
     */
    public function getSmallEntero()
    {
        return $this->smallEntero;
    }

    /**
     * Set bigEntero
     *
     * @param integer $bigEntero
     * @return Post
     */
    public function setBigEntero($bigEntero)
    {
        $this->bigEntero = $bigEntero;

        return $this;
    }

    /**
     * Get bigEntero
     *
     * @return integer 
     */
    public function getBigEntero()
    {
        return $this->bigEntero;
    }

    /**
     * Set cadena
     *
     * @param string $cadena
     * @return Post
     */
    public function setCadena($cadena)
    {
        $this->cadena = $cadena;

        return $this;
    }

    /**
     * Get cadena
     *
     * @return string 
     */
    public function getCadena()
    {
        return $this->cadena;
    }

    /**
     * Set texto
     *
     * @param string $texto
     * @return Post
     */
    public function setTexto($texto)
    {
        $this->texto = $texto;

        return $this;
    }

    /**
     * Get texto
     *
     * @return string 
     */
    public function getTexto()
    {
        return $this->texto;
    }

    /**
     * Set fechatiempo
     *
     * @param \DateTime $fechatiempo
     * @return Post
     */
    public function setFechatiempo($fechatiempo)
    {
        $this->fechatiempo = $fechatiempo;

        return $this;
    }

    /**
     * Get fechatiempo
     *
     * @return \DateTime 
     */
    public function getFechatiempo()
    {
        return $this->fechatiempo;
    }

    /**
     * Set dechatiempoz
     *
     * @param \DateTime $dechatiempoz
     * @return Post
     */
    public function setDechatiempoz($dechatiempoz)
    {
        $this->dechatiempoz = $dechatiempoz;

        return $this;
    }

    /**
     * Get dechatiempoz
     *
     * @return \DateTime 
     */
    public function getDechatiempoz()
    {
        return $this->dechatiempoz;
    }

    /**
     * Set fecha
     *
     * @param \DateTime $fecha
     * @return Post
     */
    public function setFecha($fecha)
    {
        $this->fecha = $fecha;

        return $this;
    }

    /**
     * Get fecha
     *
     * @return \DateTime 
     */
    public function getFecha()
    {
        return $this->fecha;
    }

    /**
     * Set tiempo
     *
     * @param \DateTime $tiempo
     * @return Post
     */
    public function setTiempo($tiempo)
    {
        $this->tiempo = $tiempo;

        return $this;
    }

    /**
     * Get tiempo
     *
     * @return \DateTime 
     */
    public function getTiempo()
    {
        return $this->tiempo;
    }

    /**
     * Set numerodecimal
     *
     * @param string $numerodecimal
     * @return Post
     */
    public function setNumerodecimal($numerodecimal)
    {
        $this->numerodecimal = $numerodecimal;

        return $this;
    }

    /**
     * Get numerodecimal
     *
     * @return string 
     */
    public function getNumerodecimal()
    {
        return $this->numerodecimal;
    }

    /**
     * Set numeroconcoma
     *
     * @param float $numeroconcoma
     * @return Post
     */
    public function setNumeroconcoma($numeroconcoma)
    {
        $this->numeroconcoma = $numeroconcoma;

        return $this;
    }

    /**
     * Get numeroconcoma
     *
     * @return float 
     */
    public function getNumeroconcoma()
    {
        return $this->numeroconcoma;
    }

    /**
     * Set gotaBlob
     *
     * @param string $gotaBlob
     * @return Post
     */
    public function setGotaBlob($gotaBlob)
    {
        $this->gotaBlob = $gotaBlob;

        return $this;
    }

    /**
     * Get gotaBlob
     *
     * @return string 
     */
    public function getGotaBlob()
    {
        return $this->gotaBlob;
    }

    /**
     * Set guidGuid
     *
     * @param guid $guidGuid
     * @return Post
     */
    public function setGuidGuid($guidGuid)
    {
        $this->guidGuid = $guidGuid;

        return $this;
    }

    /**
     * Get guidGuid
     *
     * @return guid 
     */
    public function getGuidGuid()
    {
        return $this->guidGuid;
    }
}
