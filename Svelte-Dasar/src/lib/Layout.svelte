<script>
    const {title, content, footer} = $props()
</script>

<h1>{title}</h1>

{@render content()}

<footer>{footer}</footer>