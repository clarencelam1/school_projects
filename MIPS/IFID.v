`timescale 1ns / 1ps

module IFID
(
 input flush,
 input stall,
 input clk,
 input [31:0] pc_four,
 input [31:0] instruction,
 output reg [31:0] out_instruction,
 output reg [31:0] pc_out_four,
 output reg start
);

//reg [1:0] count; 
reg [1:0] counter;

parameter COUNT = 2'd3;
/*
parameter S1 = 2'd1;
parameter S2 = 2'd2;
parameter S3 = 2'd3;
*/

initial
	begin
		counter = 2'd0;
		out_instruction = 32'd0;
	end
//assign out_instruction = instruction;

always @(posedge clk)
	begin
	start <= 1'b0;
	if(stall == 1'b0)
		begin
			if(flush == 1'b1)
				begin
					out_instruction <= 32'd0;
				end
			else
				begin				
					out_instruction <= instruction;
				end
				pc_out_four <= pc_four;
		end
	else
		begin
			if(counter + 2'd1 == COUNT)
				begin
					start <= 1'b1;
					counter <= 2'd0;
				end
			else
				begin
					counter <= counter + 2'd1;
				end
		end
	end
	

endmodule