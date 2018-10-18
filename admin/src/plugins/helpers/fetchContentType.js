export default function fetchContentType(vm, ct, page, size){
  return vm.$store.dispatch("content/setListing", {
    ct,
    page,
    size
  });
}