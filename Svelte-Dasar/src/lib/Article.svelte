<script>
  async function getArticle() {
    let response = await fetch("/article.json");
    let data = await response.json();
    return data;
  }
</script>

{#await getArticle()}
  <p>...loading</p>
{:then articles}
  {#each articles as article (article.id)}
    <p>{article.id}</p>
    <h1>{article.title}</h1>
    <p>{article.content}</p>
  {/each}
{:catch error}
  <p style="color: red">{error.message}</p>
{/await}
