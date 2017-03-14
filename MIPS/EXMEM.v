module EXMEM
(
	
	input clk,
	input [1:0] size_in,
	input mem_to_reg,
	input mem_read_out,
	input mem_write_out,
	input load_byte,
	input [31:0] pc_four,
	
	//registers needed for memory
	
	input [31:0] instruction,
	input [31:0] alu_out,
	input [31:0] store_bytes_out,
	input [4:0]  destination_register,
	
	
	//WB
	//input reg_dest_out,
	input reg_write_out,
	input write_out,
	//input jump_and_link_out,
	input write_register_data_out,
	input write_register,
	
	output reg [31:0] stage3_pc_four,
	output reg [31:0] instruction_out,
	output reg [1:0] stage3_size_in,
	output reg stage3_mem_to_reg,
	output reg stage3_mem_read_out,
	output reg stage3_mem_write_out,
	output reg stage3_load_byte,
	
	
	output reg [31:0] stage3_alu_out,
	output reg [31:0] stage3_store_bytes_out,

	
	output reg [4:0]  stage3_destination_register,
	output reg stage3_reg_write_out,
	output reg stage3_write_out,

	output reg stage3_write_register_data_out,
	output reg stage3_write_register
	
);

initial 
begin
		instruction_out <= 32'd0;
		stage3_size_in <= 2'd0;
		stage3_mem_to_reg <= 1'b0;
		stage3_mem_read_out <= 1'b0;
		stage3_mem_write_out <= 1'b0;
		stage3_load_byte <= 1'b0;
		
		stage3_alu_out <= 1'b0;
		stage3_store_bytes_out <= 1'b0;
		stage3_destination_register <= 5'd0;
		
		stage3_reg_write_out <= 1'b0;
		stage3_write_out <= 1'b0;
		stage3_write_register_data_out <= 1'b0;
		stage3_write_register <= 1'b0;
		stage3_pc_four <= 32'd0;
		
		
end	

always @ (posedge clk)
	begin
	
		stage3_pc_four <= pc_four;
		instruction_out <= instruction;
		stage3_size_in <= size_in;
		stage3_mem_to_reg <= mem_to_reg;
		stage3_mem_read_out <= mem_read_out;
		stage3_mem_write_out <= mem_write_out;
		stage3_load_byte <= load_byte;
		
		stage3_alu_out <= alu_out;
		stage3_store_bytes_out <= store_bytes_out;
		stage3_destination_register <= destination_register;
		
		stage3_reg_write_out <= reg_write_out;
		stage3_write_out <= write_out;
		stage3_write_register_data_out <= write_register_data_out;
		stage3_write_register <= write_register;
		
		
	end


endmodule