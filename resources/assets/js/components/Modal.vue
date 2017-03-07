<template>
    <div class="modal fade" role="modal" aria-labelledby="modal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button class="close" type="button" data-dismiss="close" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">{{ title }}</h4>
                </div>
                <div class="modal-body">
                    <slot></slot>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="close">Close</button>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    props: ['title', 'body']
}
</script>
