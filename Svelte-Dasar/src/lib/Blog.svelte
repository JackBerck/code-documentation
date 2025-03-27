<script>
  import { onMount } from "svelte";
  import Layout from "./Layout.svelte";

  let blogs = $state([
    {
      title: "",
      content: "",
      footer: "",
    },
  ]);

  onMount(async () => {
    const response = await fetch("/blog.json");
    return (blogs = await response.json());
  });
</script>

{#each blogs as blog}
  <Layout title={blog.title} footer={blog.footer}>
    {#snippet content()}
      {@html blog.content}
    {/snippet}
  </Layout>
{/each}
