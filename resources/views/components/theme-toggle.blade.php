<button
    x-data="{ dark: document.documentElement.classList.contains('dark') }"
    @click="dark = !dark; document.documentElement.classList.toggle('dark', dark)"
    class="{{ $attributes->merge(['class' => 'btn btn-circle']) }}"
    title="Toggle Theme"
>
    <template x-if="!dark">
        <span>🌞</span>
    </template>
    <template x-if="dark">
        <span>🌙</span>
    </template>
</button>
