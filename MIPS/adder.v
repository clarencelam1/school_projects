`timescale 1ns / 1ps
/*
 * CSE141L Lab1: Be a Hardware Hacker!
 * University of California, San Diego
 * 
 * Written by Donghwan Jeon, 4/1/2007
 */
 
module adder#(parameter W = 32)
(
 input [W-1:0] inA, inB,
 output reg [W:0] out
);

reg [W-1:0] regA, regB;
wire [W:0] wireOut;

assign wireOut = regA + regB;


always@(*)
begin
 regA <= inA;
 regB <= inB;
 out <= wireOut;
end

endmodule