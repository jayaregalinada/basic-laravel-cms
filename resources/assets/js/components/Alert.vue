<template>
    <div class="panel">
        <div class="panel-heading">
            <h4 class="panel-title">{{ title }}</h4>
        </div>
        <div class="panel-body">
            <slot></slot>
        </div>
    </div>
</template>

<script>
export default {
    props: ['title', 'type']
}
</script>
