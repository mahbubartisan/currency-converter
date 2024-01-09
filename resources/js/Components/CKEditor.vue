<template>
    <div>
      <textarea ref="editor"></textarea>
    </div>
  </template>
  
  <script>
  import ClassicEditor from '@ckeditor/ckeditor5-build-classic';
  
  export default {
    mounted() {
      ClassicEditor
        .create(this.$refs.editor)
        .then(editor => {
          editor.setData(this.value);
          editor.model.document.on('change:data', () => {
            this.$emit('input', editor.getData());
          });
        })
        .catch(error => {
          console.error(error);
        });
    },
    props: {
      value: {
        type: String,
        default: ''
      }
    }
  };
  </script>
  