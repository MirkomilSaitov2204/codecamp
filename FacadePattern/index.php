<?php

// classlar facade classda yegilib ishlatish imkonini beradi va user uchun oson foydalanish imkonini beradi

class SubSystemA {
    public function a()
    {
        return " A operation";
    }
}

class SubSystemB {
    public function b()
    {
        return " B operation";
    }
}

class SubSystemC {
    public function c()
    {
        return " C operation";
    }
}

class Facade {
    private readonly SubSystemA $a;
        private readonly SubSystemB $b;
        private readonly SubSystemC $c;
    public function __construct()
    {
        $this->a = new SubSystemA();
        $this->b = new SubSystemB();
        $this->c = new SubSystemC();
    }

    public function operation()
    {
        $result = $this->a->a();
        $result .= $this->b->b();
        $result .= $this->c->c();

        return $result;
    }
}

$facade = new Facade();
echo $facade->operation();