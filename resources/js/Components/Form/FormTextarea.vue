<template>
    <textarea
        class="textarea textarea-bordered dark:bg-[#0D0C22] border"
        :class="
            (classes,
            {
                'text-slate-700 placeholder-gray-400 border-gray-300 focus:ring-indigo-600 focus:border-indigo-600 dark:border-slate-800 dark:text-slate-100 dark:placeholder-gray-600':
                    !variant.length,
                'text-emerald-700 placeholder-emerald-400 border-emerald-300 focus:ring-emerald-600 focus:border-emerald-600':
                    variant === 'success',
                'text-rose-700 placeholder-rose-400 border-rose-300 focus:ring-rose-600 focus:border-rose-600':
                    variant === 'danger',
                'resize-none': !resize,
            })
        "
        @input="(e) => $emit('update:modelValue', e.target.value)"
        @change="(e) => $emit('change:modelValue', e.target.value)"
        :value="modelValue"
    />
</template>

<script setup>
const props = defineProps({
    modelValue: String,
    variant: {
        type: String,
        default: "",
        validator(value) {
            // The value must match one of these strings
            return ["", "success", "danger"].includes(value);
        },
    },
});
</script>
