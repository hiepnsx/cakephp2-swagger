<script type="text/javascript">
window.onload = function() {
    // Build a system
    const ui = SwaggerUIBundle({
        url: "<?= $swaggerJsonUrl ?>",
        dom_id: "#swagger-ui",
        presets: [SwaggerUIBundle.presets.apis, SwaggerUIStandalonePreset],
        plugins: [SwaggerUIBundle.plugins.DownloadUrl],
        layout: "StandaloneLayout"
    });
    window.ui = ui;
}
</script>
<div id="swagger-ui"></div>
