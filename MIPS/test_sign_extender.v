`timescale 1ns / 1ps

/*
 * CSE141L Lab1: Tools of the Trade
 * University of California, San Diego
 * 
 * Written by Matt DeVuyst, 3/30/2010
 * Modified by Vikram Bhatt, 30/3/2010
 * Modified by Adrian Caulfield, 1/8/2012
 */

//
// NOTE: This verilog is non-synthesizable.
// You can only use constructs like "initial", "#10", "forever"
// inside your test bench! Do not use it in your actual design.
//

module test_signextend();

   reg  [15:0]extend_in;
   wire  [31:0]extended_out;
	reg clk;

   // The design under test is our adder
   sign_extend dut (   
	.extend_in(extend_in),
	.sign(1),
	.extended_out(extended_out)
    );
	
	initial
     begin
        clk = 0;
        forever #10 clk = !clk;
     end

   // Test with a variety of inputs.
   // Introduce new stimulus on the falling clock edge so that values
   // will be on the input wires in plenty of time to be read by
   // registers on the subsequent rising clock edge.
   initial
     begin
	  extend_in = 16'b0;
	  @(negedge clk);
	  extend_in = 16'b1000000000000000;
     end // initial begin

endmodule // test_adder
