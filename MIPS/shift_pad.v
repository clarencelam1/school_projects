`timescale 1ns / 1ps

module shift_pad
(
 input [25:0] inA,
 input [3:0]  inB,
 output [31:0] out
);



assign out[31:0] = {inB, {2'b00, inA << 2}};

endmodule