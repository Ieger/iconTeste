<?php

class m190701_112353_icon_teste extends CDbMigration
{
    public function up()
    {
        $this->execute('CREATE TABLE public.pesquisa
(
    id serial NOT NULL,
    pesquisa character varying NOT NULL,
    PRIMARY KEY (id)
)
WITH (
    OIDS = FALSE
);');
    }

    public function down()
    {
        $this->execute('DROP TABLE public.pesquisa;');
    }

}