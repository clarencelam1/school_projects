`timescale 1ns / 1ps

module shift
(
 input [31:0] inA,
 output [31:0] out
);



assign out[31:0] = inA << 2;


endmodule