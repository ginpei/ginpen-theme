// @ts-check
import { startAddThis } from "./addThis.js";
import { startHeaderFloating } from "./floating-header.js";

main();

function main() {
  startHeaderFloating();
  startAddThis();
}
