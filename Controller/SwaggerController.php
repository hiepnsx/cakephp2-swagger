<?php

class SwaggerController extends AppController
{
    /**
     * Generates Swagger-PHP JSON documentation
     * Uses Configuration from "swagger.paths"
     * - Produces a specific resource if $resource is specified.
     * - Produces a ResourceList if no $resource is specified
     *
     * @param	string      Resource label
     * @return  string
     */
    function genDocs($resource = null)
    {
        // Prevent regular output method
        $this->response->type('json');
        $this->autoRender = false;

        $swagger = \Swagger\scan([APP . "Model", APP . "Controller", APP . "Lib"]);
        return json_encode($swagger);
    }
}
