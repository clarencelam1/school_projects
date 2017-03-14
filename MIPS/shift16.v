`timescale 1ns / 1ps

module shift16
(
 input [15:0] inA,
 output [31:0] out
);



assign out[31:0] = { inA[15:0],{16{1'b0}} };


endmodule