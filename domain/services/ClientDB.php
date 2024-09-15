<?php

enum TypeProcedure: string
{
    case FUNCTION = 'SELECT * FROM';
    case CALL = 'CALL';
}
interface IClientDB
{
    public function executeProcedure($nameProcedure, TypeProcedure $typeProcedure, $params = null);
}