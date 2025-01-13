Livewire.on("success", (message) => {
    LaravelDataTables["menu-table"].ajax.reload();
});
