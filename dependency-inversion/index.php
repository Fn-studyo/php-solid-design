<?php

class Test {

    function testItCanReadAPDFBook() {
        $b = new PDFBook();
        $r = new EBookReader($b);

        $this->assertRegExp('/pdf book/', $r->read());
    }

    function testItCanReadAMobiBook() {
        $b = new MobiBook();
        $r = new EBookReader($b);

        $this->assertRegExp('/mobi book/', $r->read());
    }

}