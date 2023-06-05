<?php

class topsis
{
    public $alternatif;
    public $kriteria = array();

    public function __construct($alt)
    {
        // data kriteria
        $this->alternatif = $alt;
        array_push($this->kriteria, array('Nilai Akademik', 5, 'Benefit'));
        array_push($this->kriteria, array('Historis Project', 4, 'Benefit'));
        array_push($this->kriteria, array('Pelatihan', 3, 'Benefit'));
        array_push($this->kriteria, array('Minat', 4, 'Benefit'));

        $this->pembagi();
        $this->normalisasi();
        $this->bobot();
        $this->normxbobot();
        $this->cmax();
        $this->cmin();
        $this->atribut();
        $this->ymaxmin();
        $this->dplusmin();
    }

    public function pembagi()
    {
        $this->pembagi = array(0, 0, 0, 0);
        foreach ($this->alternatif as $a) {
            for ($i = 0; $i < count($this->kriteria); $i++) {
                $this->pembagi[$i] += pow($a[$i + 1], 2);
            }
        }
        for ($i = 0; $i < count($this->pembagi); $i++) {
            $this->pembagi[$i] = round(sqrt($this->pembagi[$i]), 9);
        }
    }

    public function normalisasi()
    {
        $this->normalisasi = array();
        foreach ($this->alternatif as $a) {
            for ($i = 0; $i < count($this->pembagi); $i++) {
                $a[$i + 1] = $a[$i + 1] / $this->pembagi[$i];
                $a[$i + 1] = round($a[$i + 1], 9);
            }
            array_push($this->normalisasi, $a);
        }
    }

    public function bobot()
    {
        $this->bobot = array();
        foreach ($this->kriteria as $k) {
            array_push($this->bobot, $k[1]);
        }
    }

    public function normxbobot()
    {
        $this->normxbobot = array();
        foreach ($this->normalisasi as $n) {
            for ($i = 0; $i < count($this->bobot); $i++) {
                $n[$i + 1] = $n[$i + 1] * $this->bobot[$i];
            }
            array_push($this->normxbobot, $n);
        }
    }

    public function cmin()
    {
        $this->cmin = array(10, 10, 10, 10);
        foreach ($this->normxbobot as $nb) {
            if ($this->cmin[0] > $nb[1]) {
                $this->cmin[0] = $nb[1];
            }

            if ($this->cmin[1] > $nb[2]) {
                $this->cmin[1] = $nb[2];
            }

            if ($this->cmin[2] > $nb[3]) {
                $this->cmin[2] = $nb[3];
            }

            if ($this->cmin[3] > $nb[4]) {
                $this->cmin[3] = $nb[4];
            }

        }
    }

    public function cmax()
    {
        $this->cmax = array(0, 0, 0, 0);
        foreach ($this->normxbobot as $nb) {
            if ($this->cmax[0] < $nb[1]) {
                $this->cmax[0] = $nb[1];
            }

            if ($this->cmax[1] < $nb[2]) {
                $this->cmax[1] = $nb[2];
            }

            if ($this->cmax[2] < $nb[3]) {
                $this->cmax[2] = $nb[3];
            }

            if ($this->cmax[3] < $nb[4]) {
                $this->cmax[3] = $nb[4];
            }

        }
    }

    public function atribut()
    {
        $this->atribut = array();
        foreach ($this->kriteria as $k) {
            array_push($this->atribut, $k[2]);
        }
    }

    public function ymaxmin()
    {
        $this->ymax = array();
        $this->ymin = array();

        for ($i = 0; $i < count($this->atribut); $i++) {
            if ($this->atribut[$i] == 'Benefit') {
                array_push($this->ymax, $this->cmax[$i]);
                array_push($this->ymin, $this->cmin[$i]);
            } else if ($this->atribut[$i] == 'Cost') {
                array_push($this->ymax, $this->cmin[$i]);
                array_push($this->ymin, $this->cmax[$i]);
            }
        }
    }

    public function dplusmin()
    {
        $this->dplusmin = array();
        foreach ($this->normxbobot as $nb) {
            $this->dplus = 0;
            $this->dmin = 0;
            for ($i = 0; $i < count($this->ymax); $i++) {
                $this->dplus += pow($this->ymax[$i] - $nb[$i + 1], 2);
                $this->dmin += pow($nb[$i + 1] - $this->ymin[$i], 2);
            }
            $nb[6] = sqrt($this->dplus);
            $nb[7] = sqrt($this->dmin);
            array_push($this->dplusmin, $nb);
        }
    }
}