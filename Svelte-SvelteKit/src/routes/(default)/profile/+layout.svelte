<script lang="ts">
	const { children, data } = $props();
</script>

<ul>
	<li>Hello {data.user}</li>
	<li><a href="/profile/user">User</a></li>
	<li><a href="/profile/wallet">Wallet</a></li>
	<li><a href="/profile/address">Address</a></li>
</ul>

{@render children()}
