export async function load({parent}) {
    const data = await parent();

    return {
        wallet: `Wallet ${data.user}`,
        balance: 1000,
    }
}